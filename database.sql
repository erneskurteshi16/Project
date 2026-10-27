CREATE DATABASE IF NOT EXISTS projekti_filma;
USE projekti_filma;

CREATE TABLE users ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100) NOT NULL, 
    email VARCHAR(190) NOT NULL UNIQUE, 
    password VARCHAR(255) NOT NULL, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
); 
    
    CREATE TABLE movies ( 
        id INT AUTO_INCREMENT PRIMARY KEY, 
        title VARCHAR(150) NOT NULL, 
        genre VARCHAR(80) NOT NULL, 
        release_year INT NOT NULL, 
        description TEXT NOT NULL, 
        poster_url VARCHAR(500) NOT NULL 
); 

    INSERT INTO movies 
    ( title, genre, release_year, description, poster_url) 
    VALUES 
    ( 'Inception', 
      'Sci-Fi / Thriller', 
       2010, 
       'Një histori misterioze që zhvillohet në botën e ëndrrave.', 
       'https://image.tmdb.org/t/p/w500/oYuLEt3zVCKq57qu2F8dT7NIa6f.jpg'
),
    ( 
        'Interstellar', 
        'Sci-Fi / Dramë', 
        2014, 
        'Një udhëtim në hapësirë për të gjetur një të ardhme për njerëzimin.', 
        'https://image.tmdb.org/t/p/w500/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg' 
), 

(   
        'The Dark Knight', 
        'Aksion / Krim', 
        2008, 
        'Batman përballet me një kundërshtar të rrezikshëm.', 
        'https://image.tmdb.org/t/p/w500/qJ2tW6WMUDux911r6m7haRef0WH.jpg' 
), 
( 
        'Avatar', 
        'Fantazi / Aventurë', 
        2009, 
        'Një aventurë në një botë të jashtëzakonshme.', 
        'https://image.tmdb.org/t/p/w500/kyeqWdyUXW608qlYkRqosgbbJyK.jpg' 
);