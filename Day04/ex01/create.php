<?php
if (!file_exists('private'))
    mkdir('private', 0755);
$array = array();
$i = 0;
if (!$_POST['submit'] || ($_POST['submit'] && $_POST['submit'] != "OK"))
{
    echo "ERROR\n";
    exit;
}
if ($_POST['login'])
{
    if ($_POST['passwd'] && $_POST['passwd'] != "")
    {
        $array[] = array('login' => $_POST['login'], 'passwd' => hash('whirlpool', $_POST['passwd']));
        if (file_exists('private/passwd'))
        {
            $content = file_get_contents('private/passwd');
            $data = unserialize($content);
            foreach ($data as $key => $value)
            {
                if ($value['login'] == $_POST['login'])
                {
                    echo "ERROR\n";
                    exit();
                }
            }
            $data[] = $array[0];
            file_put_contents('private/passwd', serialize($data));
        }
        else
            file_put_contents('private/passwd', serialize($array));
    }
    else
    {
        echo "ERROR\n";
        exit();
    }
}
echo "OK\n";