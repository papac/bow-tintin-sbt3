{# Echo Data #}
Hello, {{ $name }}.
The current UNIX timestamp is {{ time() }}.

{# Echoing Data After Checking For Existence #}
{{ isset($name) ? $name : 'Default' }}
{{ $name or 'Default' }}

{# Escape Data #}
Hello, {{{ $name }}}.

<?php echo $name; ?>
<?= $name; ?>

<?php
  foreach (range(1, 10) as $number) {
    echo $number;
  }
?>

#include('header')

{# Service injection #}

{# PHP open/close tags #}
<div class="container">
  #php
    foreach (range(1, 10) as $number) {
      echo $number;
    }
  #endphp
</div>

#include('footer')

{# Use Tintin Layout #}
#extends('layouts.app')

#block('sidebar')
  <p>Sidebar content </p>
#endblock

#block('content')
  <p>This is my body content.</p>
#endblock

{# inject section #}
#inject('content', 'Default Content')
{# If Statement #}
#if (count($records) === 1)
  I have one record!
#elseif (count($records) > 1)
  I have multiple records!
#elif (count($records) > 1)
  I have multiple records!
#else
  I don't have any records!
#endif

<ul class="list #if (count($records) === 1) extra-class #endif">
  #loop($messages as $message)
    <li>{{ $message }}</li>
  #endloop
</ul>

#isset($name)
  Hello, {{ $name }}.
#endisset

#unless (Auth::check())
  You are not signed in.
#endunless

{# Loops #}
#for ($i = 0; $i < 10; $i++)
  The current value is {{ $i }}
#endfor

#loop ($users as $user)
  <p>This is user {{ $user->id }}</p>
#endloop

#while (true)
  <p>I'm looping forever.</p>
#endwhile

{# Single line if statement #}
#if($foo === true) <p>Text</p> #endif

{# Quoted tintin directive matching #}
<p class="first-class #if ($x == true) second-class #endif">Text</p>

{# Complex conditional inline #}
<p class="first-class #if (($x == true) && ($y == "yes")) second-class #endif">Text</p>