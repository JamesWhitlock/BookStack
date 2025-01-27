<?php
/**
 * Authentication Language Lines
 * The following language lines are used during authentication for various
 * messages that we need to display to the user.
 */
return [

    'failed' => 'Ови акредитиви се не поклапају са нашом евиденцијом.',
    'throttle' => 'Превише покушаја пријаве. Покушајте поново за :seconds секунди.',

    // Login & Register
    'sign_up' => 'Региструј се',
    'log_in' => 'Пријави се',
    'log_in_with' => 'Пријавите се са :socialDriver',
    'sign_up_with' => 'Пријавите се са :socialDriver',
    'logout' => 'Одјави се',

    'name' => 'Име',
    'username' => 'Корисничко име',
    'email' => 'Е-пошта',
    'password' => 'Лозинка',
    'password_confirm' => 'Потврди лозинку',
    'password_hint' => 'Мора да има најмање 8 знакова',
    'forgot_password' => 'Заборавили сте лозинку?',
    'remember_me' => 'Запамти ме',
    'ldap_email_hint' => 'Унесите адресу е-поште коју ћете користити за овај налог.',
    'create_account' => 'Направи налог',
    'already_have_account' => 'Већ имате налог?',
    'dont_have_account' => 'Немате налог?',
    'social_login' => 'Пријава путем друштвених мрежа',
    'social_registration' => 'Регистрација путем друштвених мрежа',
    'social_registration_text' => 'Региструјте се и пријавите користећи другу услугу.',

    'register_thanks' => 'Хвала на регистрацији!',
    'register_confirm' => 'Проверите своју е-пошту и кликните на дугме за потврду да бисте приступили :appName.',
    'registrations_disabled' => 'Регистрације су тренутно онемогућене',
    'registration_email_domain_invalid' => 'Тај домен е-поште нема приступ овој апликацији',
    'register_success' => 'Хвала што сте се пријавили! Сада сте регистровани и пријављени.',

    // Login auto-initiation
    'auto_init_starting' => 'Покушај пријаве',
    'auto_init_starting_desc' => 'Контактирамо ваш систем за аутентификацију да бисмо започели процес пријављивања. Ако нема напретка након 5 секунди, можете покушати да кликнете на везу испод.',
    'auto_init_start_link' => 'Наставите са аутентификацијом',

    // Password Reset
    'reset_password' => 'Ресетуј лозинку',
    'reset_password_send_instructions' => 'Унесите своју адресу е-поште испод и биће вам послата порука е-поште са везом за ресетовање лозинке.',
    'reset_password_send_button' => 'Пошаљи везу за ресетовање',
    'reset_password_sent' => 'Веза за ресетовање лозинке ће бити послата на :email ако се та адреса е-поште пронађе у систему.',
    'reset_password_success' => 'Ваша лозинка је успешно ресетована.',
    'email_reset_subject' => 'Ресетујте лозинку за :appName',
    'email_reset_text' => 'Примили сте ову е-пошту јер смо примили захтев за ресетовање лозинке за ваш налог.',
    'email_reset_not_requested' => 'Ако нисте захтевали ресетовање лозинке, нису потребне додатне радње.',

    // Email Confirmation
    'email_confirm_subject' => 'Потврдите своју е-пошту на :appName',
    'email_confirm_greeting' => 'Хвала што сте се придружили :appName!',
    'email_confirm_text' => 'Молимо потврдите своју адресу е-поште кликом на дугме испод:',
    'email_confirm_action' => 'Потврдите е-пошту',
    'email_confirm_send_error' => 'Потребна је потврда е-поште, али систем није могао да пошаље е-пошту. Контактирајте администратора да бисте се уверили да је е-пошта исправно подешена.',
    'email_confirm_success' => 'Ваша е-пошта је потврђена! Сада би требало да будете у могућности да се пријавите користећи ову адресу е-поште.',
    'email_confirm_resent' => 'Потврда е-поште је поново послата, проверите пријемно сандуче.',
    'email_confirm_thanks' => 'Хвала на потврди!',
    'email_confirm_thanks_desc' => 'Сачекајте тренутак док се обради ваша потврда. Ако не будете преусмерени након 3 секунде, притисните доњу везу „Настави“ да бисте наставили.',

    'email_not_confirmed' => 'Адреса е-поште није потврђена',
    'email_not_confirmed_text' => 'Ваша адреса е-поште још није потврђена.',
    'email_not_confirmed_click_link' => 'Кликните на везу у е-поруци која је послата убрзо након што сте се регистровали.',
    'email_not_confirmed_resend' => 'Ако не можете да пронађете е-пошту, можете поново да пошаљете е-поруку за потврду тако што ћете послати образац испод.',
    'email_not_confirmed_resend_button' => 'Пошаљи поново мејл за потврду',

    // User Invite
    'user_invite_email_subject' => 'Позвани сте да се придружите :appName!',
    'user_invite_email_greeting' => 'За вас је креиран налог на :appName.',
    'user_invite_email_text' => 'Кликните на дугме испод да бисте поставили лозинку за налог и добили приступ:',
    'user_invite_email_action' => 'Подесите лозинку за налог',
    'user_invite_page_welcome' => 'Добродошли у :appName!',
    'user_invite_page_text' => 'Да бисте завршили креирање налога и добили приступ, потребно је да поставите лозинку која ће се користити за пријаву на :appName приликом будућих посета.',
    'user_invite_page_confirm_button' => 'Потврди лозинку',
    'user_invite_success_login' => 'Лозинка је постављена, сада би требало да будете у могућности да се пријавите користећи постављену лозинку за приступ :appName!',

    // Multi-factor Authentication
    'mfa_setup' => 'Подешавање вишефакторске аутентификације',
    'mfa_setup_desc' => 'Подесите вишефакторску аутентификацију као додатни ниво безбедности за ваш кориснички налог.',
    'mfa_setup_configured' => 'Већ конфигурисано',
    'mfa_setup_reconfigure' => 'Поново конфигуришите',
    'mfa_setup_remove_confirmation' => 'Да ли сте сигурни да желите да уклоните овај метод вишефакторске аутентификације?',
    'mfa_setup_action' => 'Подешавање',
    'mfa_backup_codes_usage_limit_warning' => 'Преостало вам је мање од 5 резервних кодова. Генеришите и сачувајте нови сет пре него што вам понестане кодова како бисте спречили да останете без налога.',
    'mfa_option_totp_title' => 'Aplikacije za mobilne uređaje',
    'mfa_option_totp_desc' => 'Да бисте користили вишефакторску аутентификацију, биће вам потребна мобилна апликација која подржава ТОТП, као што јеGoogle Authenticator, Authy или Microsoft Authenticator.',
    'mfa_option_backup_codes_title' => 'Резервни кодови',
    'mfa_option_backup_codes_desc' => 'Безбедно чувајте скуп резервних кодова за једнократну употребу које можете да унесете да бисте потврдили свој идентитет.',
    'mfa_gen_confirm_and_enable' => 'Потврдите и омогућите',
    'mfa_gen_backup_codes_title' => 'Подешавање резервних кодова',
    'mfa_gen_backup_codes_desc' => 'Store the below list of codes in a safe place. When accessing the system you\'ll be able to use one of the codes as a second authentication mechanism.',
    'mfa_gen_backup_codes_download' => 'Преузми кодове',
    'mfa_gen_backup_codes_usage_warning' => 'Сваки код се може искористити једном',
    'mfa_gen_totp_title' => 'Подешавање мобилне апликације',
    'mfa_gen_totp_desc' => 'To use multi-factor authentication you\'ll need a mobile application that supports TOTP such as Google Authenticator, Authy or Microsoft Authenticator.',
    'mfa_gen_totp_scan' => 'Scan the QR code below using your preferred authentication app to get started.',
    'mfa_gen_totp_verify_setup' => 'Верификуј подешавања',
    'mfa_gen_totp_verify_setup_desc' => 'Verify that all is working by entering a code, generated within your authentication app, in the input box below:',
    'mfa_gen_totp_provide_code_here' => 'Provide your app generated code here',
    'mfa_verify_access' => 'Верификуј приступ',
    'mfa_verify_access_desc' => 'Your user account requires you to confirm your identity via an additional level of verification before you\'re granted access. Verify using one of your configured methods to continue.',
    'mfa_verify_no_methods' => 'Методе нису конфигурисане',
    'mfa_verify_no_methods_desc' => 'No multi-factor authentication methods could be found for your account. You\'ll need to set up at least one method before you gain access.',
    'mfa_verify_use_totp' => 'Верификација путем мобилне апликације',
    'mfa_verify_use_backup_codes' => 'Verify using a backup code',
    'mfa_verify_backup_code' => 'Резервни код',
    'mfa_verify_backup_code_desc' => 'Enter one of your remaining backup codes below:',
    'mfa_verify_backup_code_enter_here' => 'Унеси резервни код овде',
    'mfa_verify_totp_desc' => 'Enter the code, generated using your mobile app, below:',
    'mfa_setup_login_notification' => 'Multi-factor method configured, Please now login again using the configured method.',
];
