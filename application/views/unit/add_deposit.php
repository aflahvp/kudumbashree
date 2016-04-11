<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">
    <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url('img/ico.png');?>" type="image/png" sizes="47x54">
    <title>E-Kudumbashree</title>
    <link rel="stylesheet" href="<?php echo base_url('css/styleapp.css');?>">
    <script type="text/javascript" src="<?php echo base_url('js/appjs.js');?>"></script>
    <style>
        #img{
            width: 10px;
            height: 10px;
        }
    </style>
</head>
<body>
<div class="page-wrapper">
    <div class="left-wrapper">
        <?php echo unit_menu('deposit');?>
    </div>

    <nav class="top-wrapper">
        <div class="sidebar-top">
            <button class="humburger pull-left">
                <i class="fa fa-bars fa-2x center-block"></i>
            </button>
            <ul class="menu-top pull-right">
                <li><a href="#"><i class="fa fa-envelope-o fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-bell-o fa-lg"></i></a></li>
                <li><a href="#"><i class="fa fa-cog fa-lg"></i></a></li>
                <li>
                    <a href="<?php echo base_url('unit/logout');?>">logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        <?php echo form_open(base_url(uri_string().'/submit'), ['id' => 'addform', 'name' => 'addform'])?>
        <div>
            <div>
                <label for="name">Name</label>
                <select name="name" id="name">
                    <?php if ($members != false) {
                        foreach ($members as $value) {
                            echo '<option value="'.$value->id.'">'.$value->name.'</option>';
                        }
                    }?>
                </select>
            </div>
            <div>
                <label for="amount">amount</label>
                <input type="number" name="amount" id="amount"/>
            </div>
            <div>
                <button>submit</button>
            </div>
        </div>
    </div>
    <?php if (isset($message)) {
        echo $message;
    }?>
</div>
</body>
</html>