# DWA-15 Project 4 - Fetchdate ###

##Live URL
http://fetchdate.gopagoda.com/

N.B. There are problems with the live deployment.  Based on errors recieved during deployment when running seeds, and when you attempt to go to your dashboard it appears that the migration did not totally run.  The places table doesn't seem to exist on pagoda.  This all works fine locally. 

##Project Description
Fetchdate is web app that allows you to search in your area and find a playdate for your dog.  Users can host playdates at several locations, like a dog park and their residence. 


##Details for Teaching team
You can create an account and search for playdates that have been seeded into the app already.  When setting up an account you should use a valid address in the Boston area for the geolocation to work.Alternately you can sign in to the follow account to see it already poplated with data:

Username: mpatterson
Password: 1234aoeu

Because the pagoda deployment is not working debugging is turn 'on' in the production envirorment.


##Improvements for next iteration

* Add edit functionality to playdates and places.
* Filter playdates on dashboard to be only future playdates
* Include playdates that pets are going to on dashboard (currently just shows playdates being hosted)
* Move all dates and times to unix format.  Currently date and time counts on user using correct format
* Form validation on client and server side

##Challenges
* I spent a fair amount of time troubleshooting Pagoda for live deployment, and I missed some opportunities to work more or laravel code rather than deployment.  For instance my forms and app are very fragile at this point - I would like to have more validation and user protection.

* Queries on many to many relationships are still a challenge. e.g. I would like the dashboard to display the upcoming playdates for the pets of the authenticated user, but am having trouble writing that query correctly.


##Outside code

* Bootstrap (for css and javascript)  URL: http://getbootstrap.com/ 
* Pre (for easier trouble shooting) URL: https://github.com/paste/Pre.php
* Laravel 4 Debugbar (for debuging) URL: https://github.com/barryvdh/laravel-debugbar
* Geotools for Laravel (for getting distances between locations) URL: https://github.com/toin0u/Geotools-laravel
* Google Maps Geocoder (to get gps data for addresses) URL: https://github.com/jstayton/GoogleMapsGeocoder
*Faker (for seeding database) URL: https://github.com/fzaninotto/Faker
