# Documentación
## Subida de archivos

Para configurar correctamente la subida/bajadad de archivos,no tan sólo depende de Laravel como tal, sino del servidor PHP.

Por tanto, hay que editar el php.ini. Puedes buscarlo como:

```bash
php --ini
```

Luego añadir o modificar las lineas:

```bash
upload_max_filesize = 20MB
post_max_size = 20MB
```

y listo.
