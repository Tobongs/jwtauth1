<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config['jwt_key'] = ' eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL3NlcnZlcnByb3ZpZGVyLmNvbSIsImF1ZCI6Imh0dHBzOi8vc2VydmVyY2xpZW50LmNvbSIsImlhdCI6MTcwMDk3Nzc4OCwiZXhwIjoxNzAwOTgxMzg4LCJkYXRhIjp7InVzZXJuYW1lIjoiQmFtYmFuZyIsInBhc3N3b3JkIjoiYWRhZGVoMTExXG4ifX0.HjxtTZ4LQuLpk8Lfi2V-v-Qp11GsMAHDp2VCgsO9Mi0';
$config['jwt_algorithm'] = 'HS256';
$config['jwt_issuer'] = 'https://serverprovider.com';
$config['jwt_audience'] = 'https://serverclient.com';
$config['jwt_expire'] = 3600;
