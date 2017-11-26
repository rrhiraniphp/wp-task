# Wordpress given tasks

1.1) install clean Wordpress:
-> setup new worpress version 4.9

1.2) install theme Unite. It has Bootstrap 3 inside.
-> installed Unite theme.

1.3) create child theme from Unite
-> created  unite-child theme.

1.4) add new type of post "Films". We need possibility to add new films. 
-> created  custom post type Films using CPT UI plugin.

1.5) Add following taxonimies to films: Genre, Country, Year and Actors
-> created  custom taxonimies Genre, Country, Year and Actors using CPT UI plugin and assign them in posttype films.

1.6) Add custom text fields "Ticket Price" and "Release Date". You can use extension or do it on your own
-> created  custom fields  "Ticket Price" and "Release Date" using ACF plugin and added it to posttype films.

1.7) Add 3 films with test data just to prove that it works
-> crated 3 records. Working fine.


2. Public view

2.1) add values "Country", "Genre", "Ticket Price", "Release Date" at film page under description. We must use  custom page in child theme in that particular case
-> Cretaed new template file film-template.php in child theme. Added query to fetch custom post type films. Get custom field values and films texonimies with values.
-> added hook in function.php to remove template caching specially for wordpress version 4.9.

2.2) add values "Country", "Genre", "Ticket Price", "Release Date" at list of films. We must use hook here.
-> Cretaed single.php file in child theme who overrides parent theme single template. modify it for only films post type.

2.3) create shortcode to show last 5 films. We need to add shortcode at right sidebar under search field.
-> Enable shortcodes in text widgets using add_ filter('widget_text','do_shortcode');
-> added shortcode last_five_films to fetch last five films.