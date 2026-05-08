<?php
namespace App\Enums;
enum UserRole: string { case Owner='owner'; case Admin='admin'; case Worker='worker'; case Customer='customer'; case Affiliate='affiliate'; }
