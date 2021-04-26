import pandas as pd
import matplotlib.pyplot as plt
import datetime
import matplotlib.dates as mdates
dt_now=datetime.datetime.now()
years=dt_now + datetime.timedelta(days=1)
year=years.year
month=years.month
day=years.day
hours=dt_now + datetime.timedelta(hours=1)
hour=hours.hour
if(hour<10):
    hour="0"+str(hour)
now=str(year)+"/"+str(month)+"/"+str(day)+"/"+str(hour)
now=pd.to_datetime(now)
time=pd.date_range(now,periods=24,freq='H')
time=pd.DataFrame(time)
#print(time)
df=pd.read_csv("forecast.csv",header=None)
fig=plt.figure(figsize=(10,10))
fig, ax =plt.subplots(1,1)
wea_1=df.iloc[0,24:]
wea_1.index=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23]
wea_1=wea_1.T
wea_1=pd.DataFrame(wea_1)
data_1=pd.concat([time,wea_1],axis=1)
data_1.columns=["Time","Weather"]
ax.axis('off')
ax.axis('tight')
ax.table(cellText=data_1.values,
    colLabels=data_1.columns,
    bbox=[0, 0, 1, 1],
)
print(data_1)
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
ax.set_title('Forecast '+str(day)+' '+str(mon)+' '+str(year)+' @Toyama',size=15)
pic="table_forecast_2.png"
fig.savefig(pic)