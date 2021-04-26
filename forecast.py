import pandas as pd
import matplotlib.pyplot as plt
import datetime
import matplotlib.dates as mdates
dt_now=datetime.datetime.now()
year=dt_now.year
month=dt_now.month
day=dt_now.day
hours=dt_now + datetime.timedelta(hours=1)
hour=hours.hour
if(hour<10):
    hour="0"+str(hour)
now=str(year)+"/"+str(month)+"/"+str(day)+"/"+str(hour)
now=pd.to_datetime(now)
df=pd.read_csv("forecast.csv",header=None)
fig=plt.figure(figsize=(10,10))
ax1=fig.add_subplot(2,1,1)
ax2=fig.add_subplot(2,1,2)
ax3=ax2.twinx()
wea=df.iloc[0,:]
tem=df.iloc[1,:].astype(float)
pres=df.iloc[2,:].astype(float)
hum=df.iloc[3,:].astype(float)
win=df.iloc[4,:].astype(float)
num=len(hum)
x=pd.date_range(now,periods=num,freq="H")
ax1.plot(x,pres,color='g')
ax2.plot(x,tem,color="r")
ax3.plot(x,hum,color='b')
ax1.set_ylabel('Pressure[hPa]',color='g')
for tl in ax1.get_yticklabels():
    tl.set_color('g')
ax2.set_ylabel('Temperature[℃]',color='r')
for tl in ax2.get_yticklabels():
    tl.set_color('r')
ax3.set_ylabel('RelativeHumidity[%]',color='b')
for tl in ax3.get_yticklabels():
    tl.set_color('b')
ax1.grid();ax2.grid()
if(month==1):mon='Jan'
if(month==2):mon='Feb'
if(month==3):mon='Mar'
if(month==4):mon='Apr'
if(month==5):mon='May'
if(month==6):mon='Jun'
if(month==7):mon='Jul'
if(month==8):mon='Aug'
if(month==9):mon='Sep'
if(month==10):mon='Oct'
if(month==11):mon='Nov'
if(month==12):mon='Dec'
ax1.set_title('Forecast '+str(day)+' '+str(mon)+' '+str(year)+' @Toyama',size=15)
ax1.set_xlabel('Day(JST)',fontsize=13)
ax2.set_xlabel('Day(JST)',fontsize=13)
ax3.set_xlabel('Day(JST)',fontsize=13)
pic="forecast.png"
fig.savefig(pic)