#!/usr/bin/env python


import webapp2, jinja2, os, hashlib, logging, urllib
import json
import datetime
from random import randint

from google.appengine.api import memcache
from google.appengine.api import urlfetch
from google.appengine.ext import db

from model import RetweetCount


JINJA_ENVIRONMENT = jinja2.Environment(
    loader=jinja2.FileSystemLoader(os.path.dirname(__file__)),
    extensions=['jinja2.ext.autoescape'])


class JsonAPIHandler(webapp2.RequestHandler):
    def post(self):
        self.get()
    def get(self):
        resp = self.handle()
        self.response.headers['Content-Type'] = "application/json"
        dthandler = lambda obj: obj.isoformat() if isinstance(obj, datetime.datetime) else None
        self.response.write(json.dumps(resp, default=dthandler))


tags = ["fueobregon", "fuesalasbarraza", "fueherrera", "fuecalles"]

class BootstrapHandler(JsonAPIHandler):
    def handle(self):
        for tag in tags:
            rtc = RetweetCount.all().filter("hashtag = ", tag).get()
            if not rtc:
                rtc = RetweetCount(hashtag=tag, count=0)
                rtc.put()
        return {"success":True}

class CountHandler(JsonAPIHandler):
    def handle(self):
        return RetweetCount.get_tags_count(tags)

class VoteHandler(JsonAPIHandler):
    def handle(self):
        hts = self.request.arguments()
        for rtc in RetweetCount.all():
            if rtc.hashtag in hts:
                rtc.count += int(self.request.get(rtc.hashtag))
                rtc.put()
            else:
                return {"success":False}
        memcache.flush_all()
        return {"success":True}



app = webapp2.WSGIApplication([
    ('/api/bootstrap', BootstrapHandler),
    ('/api/count', CountHandler),
    ('/api/vote', VoteHandler)
], debug=False)

