<h1 align="center">
  <br>
  <img src="./docs/images/logo.png"  height="100px">
  <br>
</h1>
<h1 align="center"><b>Online Movie Presenter for small organisations</b></h1>

<p align="center">
  <a href="/LICENSE"><img src="https://img.shields.io/github/license/guruhariharaun/Registration-and-Login-Form-in-Nodejs-and-MongoDB.svg?style=flat-square"></a>
</p>


### Why are we doing it?
Since in this modern days the worth for watching movie on online have been improved. So i made this project where you can upload the Movie details like Movie Name, Movie Image, Director, Cast, Storyline and much more. Also the cool features is, we can even upload the Movie file or torrent file to the web server. All these details can viewed/download by the users. 

### Deployment
This Project is **[Live](https://thiraimovies.000webhostapp.com/)** on: 🌍 **https://thiraimovies.000webhostapp.com/**

<br>

## Getting Started

### Prerequisites
Tools that needs to run this Web Application:
- A **web server** with **PHP** preferably Apache 2 .
- A **MySQL Database Server**. (Done and tested on 10.4.6-MariaDB)

Best you can use XAMMPP which has Apache Server, mySQL-DB and much more intergrated on it.

### Installation

1. Create and Import the thirai Database dump for  **MySQL-MariaDB** from here: [movies.sql](/docs/files/movies.sql) [admin.sql](/docs/files/admin.sql) 
2. Create a Database named as thirai.
3. Copy the files from this repository to a location in the root directory(public_html) of the web server. 
4. Update your database credentials on `php/config.php`
5. With your Web Server and MySQL server running, visit the site.
6. If any error occurs, check your configurations in `php/config.php` and try again.

## Features and Screenshots

```bash
Tested on Apache/2.4.41 (Win64) OpenSSL/1.1.1c PHP/7.3.9 with 10.4.6-MariaDB
```

### User-Interface
| 				User Interface 			                               			| 
| ----------------------------------------------------------------------------- | 
| <img src="/docs/images/1.PNG" width="650" style="border: 1px solid black;"/> | 


- The whole website is developed using <b>Bootsrap Framework</b>. Fully Responsive website for all the types of devices 
- The color scheme of the User-Interface is specially made for the <b>Night owls</b>.  
- The hovering animation have been implemented i.e. when you hover on a movie card you can see some hovering effect which is made with pure css.
- <b>About Me</b> and <b>Technologies Used</b> page is also included on the `index`
- The admin Login is simply on its sleek.
- The Admin Panel has a neat form to get inputs from admin and populate the Database. Also the Movies which the Admin uploaded will be displayed below the form
- These contents are well animated using scroll animation Library.
- The a custome error page is also been implemented.  

### Back-end 
- This is two-ended system (Both for **admin** and **public**) can access.
- Only Admin have privilage to Post / Edit / Delete the Moives.
- The Movies are displayed at index page on the recently added.
- 
|S.no|The Admin can upload data's like:	|
|----|----------------------------------|
|1	 |Movie's named						|
|2 	 |Movie's Poster Image 				|	
|3   |Trailer Link 						|
|4   |Director 							|
|5   |Storyline 						|
|6   |Cast 								|
|7   |Download Link						|							 		   							

- These data's are uploaded into Database and retrive.
- Cookies have been implemented to find the particular movie which the user have been created.
- Sessions have also been implemented to have secure login.
<br>
<br>

## Development

| Update                |  status	                                         	|
| --------------------- | :---------------------------------------------------- |
| 	**24-04-2020** 		|  	Web application is Hosted and deployed.				|  	

<br>

## Author

| Author                | Profile Link                                       |
| --------------------- | :------------------------------------------------- |
| **Guru HariHaraun N** | **[Guru Roxz](https://github.com/guruhariharaun)** |


## Acknowledgments
* Hat tip to anyone whose code was used.
* Special mention to SVCE-CSI for Organizing this event.

<br><br>
<div align="center">
<a href="https://www.buymeacoffee.com/YwGKcxa" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-orange.png" alt="Buy Me A Coffee" style="height: 51px !important;width: 217px !important;" ></a></div>
<p align="center">
  Made with ❤️ by <a href="https://github.com/guruhariharaun">Guru Roxz</a>
</p>

