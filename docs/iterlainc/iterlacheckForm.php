<?php

function replace_text($text) {
    $text = str_replace('порн', '***н', $text);
    $text = str_replace('хуй', '***', $text);
    $text = str_replace('хуя', '***', $text);
    $text = str_replace('хуе', '***', $text);
    $text = str_replace('хер', '***', $text);
    $text = str_replace('бля', '***', $text);
    $text = str_replace('мудлан', '***лан', $text);
    $text = str_replace('пизд', '****', $text);
    $text = str_replace('пиздец', '****ец', $text);
    $text = str_replace('сука', 'с**а', $text);
    $text = str_replace('ебет', '***т', $text);
    $text = str_replace('ебут', '***т', $text);
    $text = str_replace('ебать', '***ть', $text);
    $text = str_replace('ебало', '***ло', $text);
    $text = str_replace('ебальник', '*****ник', $text);
    $text = str_replace('ебарь', '***рь', $text);
    $text = str_replace('ебатория', '***тория', $text);
    $text = str_replace('ебаться', '***ться', $text);
    $text = str_replace('ебывать', '*******', $text);
    $text = str_replace('ебется', '***тся', $text);
    $text = str_replace('ебец', '***ц', $text);
    $text = str_replace('ебуч', '***ч', $text);
    $text = str_replace('ебаль', '*****', $text);
    $text = str_replace('ебельник', '*****ник', $text);
    $text = str_replace('ебарь', '***рь', $text);
    $text = str_replace('ебало', '*****', $text);
    $text = str_replace('ебатория', '*****рия', $text);
    $text = str_replace('ебануть', '*****ть', $text);
    $text = str_replace('ебца', '**ца', $text);
    $text = str_replace('ебло', '****', $text);
    $text = str_replace('ебан', '****', $text);
    $text = str_replace('ебыва', '***ва', $text);
    $text = str_replace('ебливый', '****вый', $text);
    $text = str_replace('ебнет', '**нет', $text);
    $text = str_replace('ебну', '**ну', $text);
    $text = str_replace('елда', '****', $text);
    $text = str_replace('пиздeц', '***дец', $text);
    $text = str_replace('заеба', '***ба', $text);
    $text = str_replace('жопа', '**па', $text);
    $text = str_replace('жопу', '**пу', $text);
    $text = str_replace('жопища', '****ща', $text);
    $text = str_replace('жопка', '***ка', $text);
    $text = str_replace('жопник', '***ник', $text);
    $text = str_replace('еб твою мать', '** **** мать', $text);
    $text = str_replace('еби твою мать', '*** **** мать', $text);
    $text = str_replace('ебена', '***на', $text);
    $text = str_replace('дристать', '***стать', $text);
    $text = str_replace('задрищу', '***рищу', $text);
    $text = str_replace('залупа', '**лупа', $text);
    $text = str_replace('замудоха', '****доха', $text);
    $text = str_replace('засра', '*****', $text);
    $text = str_replace('срать', '***ть', $text);
    $text = str_replace('говно', '***но', $text);
    $text = str_replace('говня', '***ня', $text);
    $text = str_replace('какать', '***ать', $text);
    $text = str_replace('кончить', '***чить', $text);
    $text = str_replace('манда', '***да', $text);
    $text = str_replace('манде', '***де', $text);
    $text = str_replace('минет', '**нет', $text);
    $text = str_replace('мудак', '**дак', $text);
    $text = str_replace('муде', '****', $text);
    $text = str_replace('мудо', '****', $text);
    $text = str_replace('мокрощелка', '*****щелка', $text);
    $text = str_replace('мокрохвостка', '*****хвостка', $text);
    $text = str_replace('набздеть', '*****еть', $text);
    $text = str_replace('дроч', '****', $text);
    $text = str_replace('ссать', '***ть', $text);
    $text = str_replace('ссак', '***к', $text);
    $text = str_replace('сцака', '***ка', $text);
    $text = str_replace('сцание', '***ние', $text);
    $text = str_replace('сцать', '***ть', $text);
    $text = str_replace('сцыха', '***ха', $text);
    $text = str_replace('дриста', '******', $text);
    $text = str_replace('срать', '*****', $text);
    $text = str_replace('блеать', '***ать', $text);
    $text = str_replace('пизд', '****', $text);
    $text = str_replace('песдец', '***дец', $text);
    $text = str_replace('пидор', '**дор', $text);
    $text = str_replace('манд', '****', $text);
    $text = str_replace('зъеба', '*****', $text);
    $text = str_replace('рукоблуд', '*****луд', $text);
    $text = str_replace('титьк', '****к', $text);
    $text = str_replace('целка', '***ка', $text);
    $text = str_replace('посос', '*****', $text);
    $text = str_replace('отсос', '*****', $text);
    $text = str_replace('лахудра', '*****ра', $text);
    $text = str_replace('секс', '****', $text);
    $text = str_replace('хрен', '****', $text);

    $text = str_replace('гaвнo', '****о', $text);
    $text = str_replace('мудлaн', '****ан', $text);
    $text = str_replace('xуй', '***', $text);
    $text = str_replace('издeц', '***ец', $text);
    $text = str_replace('eбан', '****', $text);
    $text = str_replace('бельн', '*****', $text);
    return $text;
}

$data = $_GET;

$response = array(
    'ok' => false,
    'status' => 200,
    'fields' => array(),
    'sent' => false
);
$expected = $data;
$required = array('name', 'text');

$title = $data['title'];

foreach ($data as $field => $value) {
    $temp = is_array($value) ? $value : trim($value);

    if (empty($temp) && in_array($field, $required)) {
        array_push($response['fields'], $field);
    }
}

if (empty($data['phone']) || strlen(str_replace('_', '', $data['phone'])) < 17) {
    array_push($response['fields'], 'phone');
}

if (empty($response['fields'])) {
    $response['ok'] = true;
    unset($response['fields']);
}

if($response['ok'] == true) {
    $to = 'pagezakaz@mail.ru';
    $subject = 'Заказ с сайта ' . $title;
    $message = '
    <html>
        <head>
            <title>Заказ с сайта ' . $title . '</title>
        </head>
        <body>
            <p>
                <b>Имя:</b> ' . $data['name'] . '
            </p>
            <p>
                <b>Номер телефона:</b> ' . $data['phone'] . '
            </p>
            <p>
                <b>Описание:</b> ' . replace_text($data['text']) . '
            </p>
        </body>
    </html>';

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $title . " <pagezakaz@mail.ru>\r\n";

    if(mail($to, $subject, $message, $headers)) {
        $response['sent'] = true;
    }
}

echo json_encode($response);
exit;