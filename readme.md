#Requirements
* Vagrant (Homestead of VVV)
* npm
* gulp

#Getting Started
* Maak een folder aan voor je project
* Open de terminal in die folder
* Voer het volgende uit in de root folder: `git clone https://bitbucket.org/silverbeedev/starter-underscores.git . && rm -rf .git`
* Voer het volgende uit in de root folder: `composer install`
* Verander in de `.htaccess` in je root de 2 `starter.app` in het juiste url
* Ga in de browser naar de website en volg de WordPress installatie
* Log in en selecteer Silverbee Starter als thema
* Ga in de terminal naar de theme folder
* Verander in de gulpfile.js `const proxy = 'http://starter.app/` in `const proxy = '<URL>'`
* Verander in de function.php de 2 `starter.app` in het juiste url
* Voer het volgende uit in de theme folder: `npm install`
* Voer het volgende uit in de theme folder: `gulp watch`