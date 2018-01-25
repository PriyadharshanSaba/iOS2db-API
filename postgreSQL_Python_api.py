    #postgreSQL_Python_api

    #Creator/ Developer Name: Priyadharshan Saba
    #ServerSide Scripting in Python
    #API for mySQL database connection for mobile applications. Returns data in JSON format
    #Runtime: Python 3.6.4

import sys
import psycopg2

conn =psycopg2.connect(dbname='database name',user='user',password='password',host='host',port='port number')
cursor=conn.cursor()
checkIT="   Query   "
cursor.execute(checkIT)
result = cursor.fetchone()
print(result)
