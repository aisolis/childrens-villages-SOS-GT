<br />
<p align="center">
      <img src="https://ciprodeni.org/wp-content/uploads/2018/08/socias01.jpg" alt="Aldeas infantiles" border="0" width="639px">
    
<hr>
  <h3 align="center">Childrens villages SOS GT</h3>

  <p align="center">
    Help us to be the voice of many children who have been silenced
 <hr>

  </p>
</p>



<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

<div align="center"> 
     <img src="https://user-images.githubusercontent.com/85176356/123848254-c1249a80-d8d4-11eb-9ac8-97804390f340.png" alt="d" border="0">   
</div>

As part of the #soysuvoz campaign, it is necessary to create a web page in which the viewer will be encouraged to make a donation in favor of children who suffer violence and child abuse, during this campaign a complete remodeling of the structure was carried out at a visual level such as at the code level, making the page from scratch implementing the php technology with the MVC model.

### Built With

This project was designed and written with the following technologies:
* [PHP](https://www.php.net)
* [Js](https://www.javascript.com)
* [Jquery](https://jquery.com)
* [Ajax](https://api.jquery.com/jquery.ajax/)
* [Html](https://developer.mozilla.org/es/docs/Web/HTML)



<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple example steps.

### Prerequisites

This is an example of how to list things you need to use the software and how to install them.
* apache server
  It is necessary to have an apache server, in which case it is required to use locally, you can use programs such as [Wamp Server](https://www.wampserver.com/en/) or if you have a domain, normally these already include an apache server and a database manager such as [Mysql](https://www.mysql.com)

### Installation
```
1. Clone the repo
   
   git clone https://github.com/aisolis/childrens-villages-SOS-GT.git
    
2. Run the attached query on the repository to generate a totally clean database

3. To change the configuration of the servers modify the file config.php
    -config.php ../app/config/config.php
         lines:  11: define ("RUTAPUBLIC", "https://soysuvoz.org.gt/sos"); modify "localhost" by server name
                 16: define ("APPNAME", "Soy su voz"); modify "Soy su voz" to any other name
                 03: define ("HOST", "localhost"); define the local server of the database
                 04: define ("USER", "root"); defines the server database user
                 05: define ("PASS", ""); define the database password
                 06: define ("NAME", "soysuvozdb"); defines the name of the database 
4. To modify the .htaccess access headers modify:
    .htaccess ../public/.htaccess
         line: 4 - modify "sos/public" for the root access of the server       
5. Places where local server addresses are to be changed when moving to another server:
    -Style.css ../public/css/style.css
        lineas: 1859, 1892, 1927, 2107, 2166 y 2172
    -ajaxfuncs.js ../public/Admin/js/ajaxfuncs.js
        lineas: 122, 212, 237, 313, 392, 484, 487, 491, 536 y 928
```
<!-- LICENSE -->
## License

Distributed under the GPL License. See [`LICENSE`](https://www.gnu.org/licenses/licenses.es.html#GPL) for more information.



<!-- CONTACT -->
## Contact

Alder Isaac Solis De Leon - [LinkdIn](https://www.linkedin.com/in/aisolis/) - alderi.solis@gmail.com

Project Link: [childrens-villages-SOS-GT](https://github.com/aisolis/childrens-villages-SOS-GT.git)
