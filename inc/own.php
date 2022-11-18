<?php
  $config['page_nav_top'] = true;

  $config['global_message'] = 'alo';

  $config['country_flags'] = false;
  $config['allow_no_country'] = false;

  $config['thumb_method'] = 'convert';

  $config['additional_javascript'][] = 'js/multi-image.js';
  $config['additional_javascript'][] = '../js/image-hover.js';
  $config['additional_javascript'][] = '../js/show-backlinks.js';
  $config['additional_javascript'][] = '../js/style-select.js';
  $config['max_images'] = 5;

  $config['stylesheets']['Futaba'] = 'futaba.css';
  $config['stylesheets']['Dark'] = 'dark.css';
  $config['stylesheets']['Gentoochan'] = 'gentoochan.css';
  $config['stylesheets']['Nigrachan'] = 'nigrachan.css';
  $config['stylesheets']['Ricechan'] = 'ricechan.css';
  $config['stylesheets']['Photon'] = 'photon.css';
  $config['stylesheets']['Wasabi'] = 'wasabi.css';
  $config['stylesheets']['Miku'] = 'miku.css';

  $config['allowed_ext'][] = 'svg';
  $config['allowed_ext'][] = 'webp';
  $config['allowed_ext_files'][] = 'mp4';
  $config['allowed_ext_files'][] = 'webm';

  $config['webm']['use_ffmpeg'] = true;
  $config['webm']['allow_audio'] = true;

  $config['max_filesize'] = 50 * 1024 * 1024;

  $config['image_identification'] = true;
  $config['image_identification_imgops'] = true;
  $config['image_identification_exif'] = true;
  $config['image_identification_google'] = true;
  $config['image_identification_yandex'] = true;
  $config['image_identification_iqdb'] = true;

  $config['anonymous'] = array('anon', 'asli', 'gujjar', 'pankaj', 'sunil');

  $config['timezone'] = 'Asia/Kolkata';
  $config['post_date'] = '%d/%m/%y (%a) %H:%M:%S';

  $config['boardlist_wrap_bracket'] = true;
  $config['page_nav_top'] = true;

  $config['enable_embedding'] = true;

  $config['boards'] = array(array('home' => '/' ), array('b'));
?>
