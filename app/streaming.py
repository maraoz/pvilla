from tweepy.streaming import StreamListener
from tweepy import OAuthHandler
from tweepy import Stream
import tweepy

from datetime import datetime, timedelta

import urllib2

import json

# == OAuth Authentication ==
#
# This mode of authentication is the new preferred way
# of authenticating with Twitter.

# The consumer keys can be found on your application's Details
# page located at https://dev.twitter.com/apps (under "OAuth settings")
consumer_key = "2dlqj0T6eSZFi7QPzF9g"
consumer_secret = "TIoFU6YVuB0waQIftz1ZYG4DnEIcTC48MJUjmtZ290"

# The access tokens can be found on your applications's Details
# page located at https://dev.twitter.com/apps (located 
# under "Your access token")
access_token = "1531369272-EL7iZGgvrj3s2t5Yg2AtZQKLsmDGrtyYY1SRDC4"
access_token_secret = "WZDYouhze96r6ZybpoClzwbKK08pGdF0yAcmHgkWsA"


transform = {
             'fueobregon': "fueobregon",
             "fuebarraza":"fuesalasbarraza",
             "fueherrera":"fueherrera",
             "fuecalles":"fuecalles"
             }

last_sent = datetime.now()
votes = {
         "fueobregon":0,
         "fuesalasbarraza":0,
         "fueherrera" : 0,
         "fuecalles":0
         }

class StdOutListener(StreamListener):
    """ A listener handles tweets are the received from the stream.
    This is a basic listener that just prints received tweets to stdout.

    """
    def on_data(self, data):
        global last_sent, votes
        try:
            data = json.loads(data)
            t = data.get('text')
            if not t:
                return True
            text = t.lower()
            now = datetime.now()
            for ht in transform:
                if ht in text:
                    tht = transform.get(ht)
                    votes[tht] += 1
                    if last_sent < now - timedelta(seconds=5):
                        query = ""
                        suma = 0
                        for k in votes:
                            query += k + "=" + str(votes[k]) + "&"
                            suma += votes[k]
                            votes[k] = 0
                        last_sent = now
                        query = query[:-1]
                        print query
                        print suma, "votes casted"
                        if suma > 0:
                            response = urllib2.urlopen('http://pvilla-backend.appspot.com/api/vote?' + query)
                            print response.getcode()
                            print response.read()
        except Exception:
            pass
        return True

    def on_error(self, status):
        print status

if __name__ == '__main__':
    
    l = StdOutListener()
    auth = OAuthHandler(consumer_key, consumer_secret)
    auth.set_access_token(access_token, access_token_secret)

    stream = Stream(auth, l)
    stream.filter(track=transform.keys())
