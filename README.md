# Stay at Home Vesta

A Docker file to bring up a local environment identical (or, as close as possible) to the [UCLan](https://uclan.ac.uk) Vesta System.

![Stay at Home Server](https://images-na.ssl-images-amazon.com/images/I/51SoJzZvfLL.jpg)
[Mommy, Why is There a Server in the House?](https://www.amazon.co.uk/Mommy-Why-There-Server-House/dp/160530641X)

## Notes

While developing with stay-at-home-vesta you need to replace "localhost" (or "127.0.0.1") with "vesta_database" in your mysqli_connect()
statements. Don't forget to change this back before uploading to the real Vesta.


Stay-at-home-vesta exposes the MySQL (MariaDB) server to your computer, so you can use other tools to interact with your database, such as
[MySQL Workbench](https://www.mysql.com/products/workbench/) instead of PHPMyAdmin - this is not the case with the real Vesta system.


Vesta (+ stay-at-home-vesta) uses PHP 7.0, which is not the latest. Ensure while reading PHP documentation you check the version that a feature
was added to PHP.

## Setup

### Docker Desktop

This system runs in docker, a containerisation system. Download Docker Desktop for your OS of choice:
[https://www.docker.com/products/docker-desktop](https://www.docker.com/products/docker-desktop)


Install it, you may have to reboot your computer at the end.

### Download this repo

If you're familiar with git, simply open a powershell window and run `git clone https://github.com/nevexo/stay-at-home-vesta`

Otherwise, click 'Code' and 'Download ZIP' in the top right of the project and extract these files somewhere on your computer.

![Download Zip](https://i.imgur.com/Wz2gETz.png)

### Settings

Stay-at-home-vesta tries to imitate the real Vesta host as much as possible, thus you can change your username and password to match that of your
actual Vesta accounts.

Open the file called ".env" in a text editor and change VESTA_USERNAME and VESTA_PASSWD - I recommend using the same as your real Vesta account, but it's not necessary.

> NOTE: You cannot change your username or password after starting stay-at-home-vesta for the first time.

### PowerShell

To interact with Docker, we need to use the command line. Open your stay-at-home-vesta folder and SHIFT+RIGHT CLICK in the empty space.

Select "Open PowerShell Window Here"

![PowerShell Window](https://i.imgur.com/RQEhRma.png)

### Starting and Stopping

When you wish to start using stay-at-home-vesta, simply type

```
docker-compose up -d
```

Into PowerShell, the first time you do this it'll take a few minutes to download and build all the different parts of the 'Vesta' system.

When you're done developing for the day, run:

```
docker-compose down
```

And shut down docker desktop.

## Using stay-at-home-vesta

Once you've started the services, you can open [http://localhost](http://localhost) in your browser to start using stay-at-home-vesta.

PHPMyAdmin: `http://localhost/phpmyadmin`

Your files: `http://localhost/~YourUsername`

Now you can change the files in the `src/` folder and see them update on stay-at-home-vesta.