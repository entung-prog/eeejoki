<?php
namespace App\Enums;
enum OrderStatus: string { case Pending='PENDING'; case WaitingPayment='WAITING_PAYMENT'; case Paid='PAID'; case Assigned='ASSIGNED'; case InProgress='IN_PROGRESS'; case Revision='REVISION'; case Completed='COMPLETED'; case Cancelled='CANCELLED'; }
