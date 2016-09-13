# LabQueue
A web app for maintaining a queue system on the lab.

Try it out:

https://labqueue2016.herokuapp.com/

#### Run locally
```
php -S localhost:8000
```

Client: ```localhost:8000```

Admin: ```localhost:8000/admin.html```

#### Deploy on Heroku

```
heroku create app_name
heroku buildpacks:set heroku/php
git push heroku master
heroku open
```
Client: ```http://app_name.herokuapp.com/```

Admin: ```http://app_name.herokuapp.com/admin.html```
