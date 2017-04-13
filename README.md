# Behat test
Contiene una serie di test di utilizzo di Behat come strumento di BDD.

## Requisiti
- **Vagrant**: [https://www.vagrantup.com/downloads.html](https://www.vagrantup.com/downloads.html)
- **Virtualbox**: [https://www.virtualbox.org/wiki/Downloads](https://www.virtualbox.org/wiki/Downloads)
- **Composer**: [https://getcomposer.org/](https://getcomposer.org/)

## Installazione
Usando un terminale nella cartella vagrant del progetto digitare
```
vagrant up
```
Per installare ed avviare la macchina virtuale con l'ambiente impostato.

Per installare le dipendenze accedere alla macchina vagrant con
```
vagrant ssh
```
E digitare
```
cd /var/www/behat
composer install
```

A questo punto con il comando
```
composer test
```
Vengono lanciati i test creati.