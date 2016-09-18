
<?php
if (!$_POST['submit'] || ($_POST['submit'] && $_POST['submit'] != "OK"))
{
    echo "ERROR\n";
    exit;
}
if ($_POST['login'] && $_POST['login'] != "")
{
    if ($_POST['oldpw'] && $_POST['oldpw'] != "" && $_POST['newpw'] && $_POST['newpw'] != "")
    {
        if (file_exists('private/passwd'))
        {
            $content = file_get_contents('private/passwd');
            $data = unserialize($content);
            foreach ($data as $key => $value)
            {
                if ($value['login'] == $_POST['login'])
                {
                    $hash = hash('whirlpool', $_POST['oldpw']);
                    if ($hash == $value['passwd'])
                    {
                        $data[]['passwd'] = hash('whirlpool', $_POST['newpw']);
                        file_put_contents('private/passwd', serialize($data));
                        echo "OK\n";
                        exit;
                    }
                    else
                    {
                        echo "ERROR\n";
                        exit;
                    }
                }
            }
        }
    }
}
echo "ERROR\n";
