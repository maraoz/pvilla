
from google.appengine.ext import db
from google.appengine.api import memcache

import logging

class RetweetCount(db.Model):
    """Models a retweet count for a certain hashtag until a certain time"""
    hashtag = db.StringProperty()
    count = db.IntegerProperty()
    
    @classmethod
    def get_tags_count(cls, tags):
        d = {}
        rtcs = None
        for tag in tags:
            count = memcache.get('%s:tag' % tag)
            if count is not None:
                d[tag] = count
            else:
                if not rtcs:
                    rtcs = list(cls.all().run())
                for rtc in rtcs:
                    if rtc.hashtag != tag:
                        continue
                    if not memcache.add('%s:tag' % tag, rtc.count):
                        logging.error('Memcache set failed.')
                    d[tag] = rtc.count
        return d

