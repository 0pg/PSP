from pytrends.request import TrendReq
from konlpy.tag import *
import tweepy

def getting_list(filename, listname):
    while 1:
        line = filename.readline()
        # print(line)
        line_parse = kkma.pos(line)
        for i in line_parse:
            if i[1] == u'SW':
                if i[0] in [u'♡', u'♥']:
                    listname.append(i[0])
            if i[1] in list_tag:
                listname.append(i[0])
        if not line:
            break
    return listname

def naive_bayes_classifier(test, train, all_count):
    counter = 0
    list_count = []
    for i in test:
        for j in range(len(train)):
            if i == train[j]:
                counter = counter + 1
            list_count.append(counter)
            counter = 0
    list_naive = []
    for i in range(len(list_count)):
        list_naive.append((list_count[i]+1)/float(len(train)+all_count))
    result = 1
    for i in range(len(list_naive)):
        result *= float(round(list_naive[i], 6))
    return float(result)*float(1.0/3.0)

consumer_key = "4j0DdQSDdR3zzwPAOthSXkjGb"
consumer_secret = "egsqf2MvMFmEEKUSqfFFBBxIrVPlbHXUH8Px8VWYme82WufXo9"

auth = tweepy.OAuthHandler(consumer_key, consumer_secret)

access_token = "120997994-tJuu0pC6X8SOMuJwTuHgkmXSpkDCuJBrxGdCuP2S"
access_token_secret = "gT5xi9zpCbQzCQa3CmRlgaSzsLF7WWYz3r9mQnaNUkroi"

auth.set_access_token(access_token, access_token_secret)

api = tweepy.API(auth)

keyword = "문재인"

search = []

cnt = 1

while(cnt <= 10):   # 10page 대상으로 크롤링
    tweets = api.search(keyword)
    for tweet in tweets:
        search.append(tweet)
    cnt += 1

data = {}   # 전체 문서 추가
i = 0       # 문서 번호
for tweet in search:
    data['text'] = tweet.text   # text 키에 text 문서 저장
    print(i, " : ", data)   # 문서번호 : 문서내용
    i += 1

# tweeter crawling end


kkma = Kkma()
f_pos = open('positive.txt', 'r')
f_neg = open('negative.txt', 'r')
f_neu = open('neutral.txt', 'r')
f_test = open('test.txt', 'r')

list_tag = [u'NNG', u'VV', u'VA', u'VXV', u'UN']
list_positive = []
list_negative = []
list_neutral = []

test_line = f_test.readline()
# test_s = test_line.decode('utf-8')
test_list=kkma.pos(test_line)
test_output=[]
for i in test_list:
    if i[1] == u'SW':
        if i[0] in [u'♡', u'♥']:
            test_output.append(i[0])
    if i[1] in list_tag:
        test_output.append(i[0])

list_positive = getting_list(f_pos, list_positive)
print(list_positive)
list_negative = getting_list(f_neg, list_negative)
print(list_negative)
list_neutral = getting_list(f_neu, list_neutral)
print(list_neutral)

ALL = len(set(list_positive))+len(set(list_negative))+len(set(list_neutral)) #전체 카운트, 함수에 들어가야한다. (all_count)

result_pos = naive_bayes_classifier(test_output, list_positive, ALL)
result_neg = naive_bayes_classifier(test_output, list_negative, ALL)
result_neu = naive_bayes_classifier(test_output, list_neutral, ALL)

print(result_pos, result_neg, result_neu)
if result_pos > result_neg and result_pos > result_neu:
    print('Positive')
elif result_neg > result_pos and result_neg > result_neu:
    print('Negative')
else:
    print('Neutral')

f_pos.close()
f_neg.close()
f_neu.close()
f_test.close()
## Polsitive vs Negative


pytrends = TrendReq(hl='en-KR', tz=135)

kw_list = ['문재인']
pytrends.build_payload(kw_list, cat=0, timeframe='today 3-m', geo='KR', gprop='')
result = pytrends.interest_over_time()
print(result)
