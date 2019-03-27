# Orange - Lightweight PHP framework
Universal PHP framework - Orange

## Controllers
This is where all the classes reside. By default it will have **Form** class and **User** class which are extended from the Model class.

Model class is the base class and is extended from the Medoo external package imported via composer to the framework. You can update the Medoo using,
```composer update```.

**IMPORTANT:** If you want a model to inject data into a view, just use the model at the view since there no routing available to inject it automatically. But hey, it's the same thing without having the hassle to maintain a separate routes file and also it gives the liberty to have multiple models at once in a given view to work with.

### Database
You can handle the database either by using Medoo methods or directly using PDO.

**NOTE:** In future Medoo will use the same PDO object created by includes/dbconnect.php

## Models
Always should return a json response which includes compulsorily,
- status [ success | danger | warning | info ]
- message [string]

## Views
These are the pages you can view from the front-end. Having a ```.htaccess``` rewrites GET variable used for parsing views, the framework provides pretty URLs for each view.

Simply putting a php file in the name you want to have in the URL will give you the pleasure of having the view without having to have a routing nightmare.

Example:
- **views/about.php** will give you access to **[site_url]/about**

## Resources and Templates
This framework supports multiple templates. You can either have resources for each one of them in their own folders as well as common resources in the resources folder.

### Resources
Resouces folder is where it resides the commonly uses **fonts** and **images**.

### Templates
Each folder inside templates folder can contain a distinct template with their own resouces. You can select the active template from the **config** file on the docroot.

Files that compulsorily should contain in each template,
- header.php
- footer.php
- container.php