# DWA-15 Project 4 - Fetchdate ###

##Live URL
http://fetchdate-mpatterson.rhcloud.com/

##Project Description
Fetchdate is web app that allows you to search in your area and find a playdate for your dog.  Users can host playdates at several locations, like a dog park and their residence. 


##Details for Teaching team
You can create an account, add a dog, create a playdate and search for playdates that have been seeded into the app already.  When setting up an account you should use a valid address in the Boston area for the geolocation to work.  

Alternately you can sign in to the following account to see it already populated with data:

Username: mpatterson

Password: 1234aoeu



##Improvements for next iteration

* Add edit functionality to playdates and places.
* Format flash messages. 
* Move all dates and times to unix format.  Currently date and time counts on user entering correct format.
* Form validation on client and server side.
* Better default values for pets birthday (also age reporting).
* Error handling especially around geocoding.

##Challenges
* I spent a fair amount of time troubleshooting Pagoda for live deployment, and I missed some opportunities to work more on laravel code rather than deployment.  For instance my forms and app are very fragile at this point - I would like to have validation, error handling, and csrf protection.

* Here is the url for the non-working pagoda deployment.  I've pushed the latest version to it, but I didn't really look at it since I have it working on OpenShift. http://fetchdate.gopagoda.com/ 

* Interestingly, it seems like Pagoda didn't complete (or maybe even run) my migrations.  The current deployment there throws errors indicating that it can't find some of my tables.  It worked with a simple database so I don't know if I'm running into limitations of the free service?  I'm not exactly sure what the unhappy face on the database icon means, but maybe that's where my problem is.  


##Outside code

* Bootstrap (for css and javascript)  URL: http://getbootstrap.com/ 
* Pre (for easier trouble shooting) URL: https://github.com/paste/Pre.php
* Laravel 4 Debugbar (for debugging) URL: https://github.com/barryvdh/laravel-debugbar
* Geotools for Laravel (for getting distances between locations) URL: https://github.com/toin0u/Geotools-laravel
* Google Maps Geocoder (to get gps data for addresses) URL: https://github.com/jstayton/GoogleMapsGeocoder
* Faker (for seeding database) URL: https://github.com/fzaninotto/Faker
