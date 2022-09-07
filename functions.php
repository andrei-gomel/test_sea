<?php

function calculateAge($birthday)
   {
      $date1 = new DateTime($birthday);
      $date2 = new DateTime('now');

      $interval = date_diff($date1, $date2);

      return $interval->format('%y');
   }

function login()
{
   $users = file('users.txt');

   $n = count($users);

   $users_login = [];

   $users_pass = [];

   foreach($users as $user)
   {
      $user = explode(';', $user);

      $users_login[] = $user[0];

      $users_pass[] = $user[4];
   }

   if (in_array($_POST['login'], $users_login) AND in_array(md5($_POST['password']), $users_pass))
   {
      for ($i=0; $i < $n; $i++) 
      { 
         $data = explode(';', $users[$i]);

         if ($_POST['login'] == $data[0])
         {
            $_SESSION['user'] = $data[0];

            echo 'Логин: ' . $data[0] . '<br>';

            echo 'Имя: ' . $data[1] . '<br>';

            echo 'Телефон: ' . $data[2] . '<br>';

            echo 'E-mail: ' . $data[3] . '<br>';

            echo 'Дата рождения: ' . $data[5] . '<br>';

            $age = calculateAge($data[5]);

            //echo 'Возраст: ' . $age . '<br>';

            if($age > 50)
               echo 'Акция: скидка на книгу "Ремонт в квартире своими руками" - 50%';

            if($age < 18)
               echo 'Акция: скидка на  книгу"Учебник физики для поступающих" - 50%';

            echo '<br><a href="?action=logout">Выход</a>';
         }
      }
   }
   elseif (in_array($_POST['login'], $users_login) OR in_array(md5($_POST['password']), $users_pass)) 
   {
      echo 'Логин или пароль неверный';
   }
   else echo 'Такого пользователя нет';
}

function registration()
{
   echo 'Регистрация нового пользователя<br>';

   $users = file('users.txt');

   $n = count($users);

   $users_login = [];

   foreach($users as $user)
   {
      $user = explode(';', $user);

      $users_login[] = $user[0];

   }

   if(in_array($_POST['login'], $users_login))
      echo 'Этот логин уже занят';
   else
   {
      $users[$n] = $_POST['login'] . ';' . $_POST['name'] . ';' . $_POST['phone'] . ';' . $_POST['email'] . ';' . md5($_POST['pass_1']) . ';' . $_POST['birthday'];

      if(writeInFile($users))
         echo 'Новый пользователь добавлен';
   }

}

function logout()
{
  if(isset($_SESSION['user']))
  {
    unset($_SESSION['user']);
  }

  redirect('/');
}

function writeInFile($items)
{
  if (($handle = fopen("users.txt", "w")) !== FALSE){

    foreach ($items as $item) {

    fputs($handle, $item);
    }

  }
  fclose($handle);

  return true;
}