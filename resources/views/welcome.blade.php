<!DOCTYPE html>
<?php
header('Access-Control-Allow-Origin: localhost:8888');
header('Content-Type: application/json');
  // $rss = new DOMDocument();
  // $rss->load('http://rss.cnn.com/rss/feed.rss');
  // $feed = array();
  // foreach ($rss->getElementsByTagName('item') as $node) {
  //   $item = array ( 
  //     'title' => $node->getElementsBy('title')->item(0)->nodeValue,
  //     // 'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
  //     // 'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
  //     // 'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
  //     );
  //   array_push($feed, $item);
  // }
?>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>

    <script type="text/javascript">
      $(document).ready(function()
      {
          jQuery.ajax(
          {
            url: "localhost:8888",
            dataType:"json",
            success:function(response)
            {
              $("#result").html(response.title);
            }
          });
      });
    </script>
<body>
<div class="container">
  <div id="result"></div>
</div>
</body>
</html>

