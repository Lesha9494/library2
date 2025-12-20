<?php

namespace App\Enum;

enum ActionType: string
{
    case CREATE = 'create';
    case UPDATE = 'update';
    case DELETE = 'delete';
    case LOAN = 'loan';       // Выдача книги
    case RETURN = 'return';   // Возврат книги
    case RENEW = 'renew';     // Продление книги
    case FINE = 'fine';       // Начисление штрафа
    case PAYMENT = 'payment'; // Оплата штрафа
    case IMPORT = 'import';   // Импорт данных
    case EXPORT = 'export';   // Экспорт данных
    case LOGIN = 'login';     // Вход в систему
    case LOGOUT = 'logout';   // Выход из системы
}
