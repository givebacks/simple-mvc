<?php

namespace App\Model;


class Form
{


  public function submit($post_url,$data)
    {

      $ch = curl_init($post_url);

      curl_setopt($ch, CURLOPT_URL, $post_url);
      curl_setopt($ch, CURLOPT_HEADER, true);    // we want headers
      curl_setopt($ch, CURLOPT_NOBODY, true);    // we don't need body
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_TIMEOUT,10);

      // Send registration
      $output = curl_exec($ch);

      $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

      curl_close($ch);

      return $httpcode;


    } # submit


} # Form
