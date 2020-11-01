<?php
$arr = [
  '[common]' => ['server_addr' => '5.188.39.17',
                 'server_port' => '2333',
                 'tcp_mux' => true,
                 'protocol' => 'tcp',
                 'user' => '24c3c6f11ba739b0',
                 'token' => 'SakuraFrpToken',
                 'dns_server' => '114.114.114.114'
                ],
  '[rdp]' => ['privilege_mode' => true,
              'type' => 'tcp',
              'local_ip' => '0.0.0.0',
              'local_port' => 3389,
              'remote_port' => 3389,
              'use_encryption' => true,
              'use_compression' => true
              ]
];
$json_str = json_encode($arr);
echo $json_str;
