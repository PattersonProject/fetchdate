# DWA-15 Project 4 - Fetchdate ###

##Live URL
http://fetchdate-mpatterson.rhcloud.com/

##Project Description
Fetchdate is a web app that allows you to search in your area and find a playdate for your dog.  Users can host playdates at several locations, like a dog park or their residence. 


##Intructions
You can create an account, add a dog, create a playdate and search for playdates that have been seeded into the app already.  When setting up an account you should use a valid address in the Greater Boston area for the geolocation to work.  

Alternately you can sign in to the following account to see it already populated with data:

Username: mpatterson

Password: 1234aoeu

The current dogpark locations are 74 Oxford St. Cambridge, MA; 31 Sacramento St. Cambridge, MA; and 74 Warrenton St. Boston, MA.  This allows for demonstration of the distance from residence feature while fetching a playdate. 

##Improvements for next iteration

* Add user account and access funtionality (change password, edit information etc.).
* Add edit functionality to playdates and places.
* Format flash messages. 
* Move all dates and times to unix format.  Currently date and time counts on user entering correct format.
* Form validation on client and server side.
* Better default values for pets birthday (also age reporting).
* Error handling especially around geocoding. 

##Outside code

* Bootstrap (for css and javascript)  URL: http://getbootstrap.com/ 
* Pre (for easier trouble shooting) URL: https://github.com/paste/Pre.php
* Laravel 4 Debugbar (for debugging) URL: https://github.com/barryvdh/laravel-debugbar
* Geotools for Laravel (for getting distances between locations) URL: https://github.com/toin0u/Geotools-laravel
* Google Maps Geocoder (to get gps data for addresses) URL: https://github.com/jstayton/GoogleMapsGeocoder
* Faker (for seeding database) URL: https://github.com/fzaninotto/Faker
