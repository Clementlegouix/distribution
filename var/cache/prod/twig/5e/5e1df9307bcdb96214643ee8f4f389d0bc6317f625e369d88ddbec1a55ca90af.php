<?php

/* @EasyAdmin/css/easyadmin.css.twig */
class __TwigTemplate_2270a5bb865e4f1a1f71482292b03da30ba9ca52be7350e4892c13351bdd7d2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = array("dark" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"), "light" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"));
        // line 43
        echo "
";
        // line 44
        $context["colors"] = twig_get_attribute($this->env, $this->getSourceContext(), ($context["color_schemes"] ?? null), ($context["color_scheme"] ?? null), array(), "array");
        // line 45
        echo "
";
        // line 52
        echo ".sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

";
        // line 60
        echo "body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

";
        // line 66
        echo "a        { color: ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "link", array());
        echo "; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: ";
        // line 77
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "link", array());
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 81
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "danger", array());
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

";
        // line 90
        echo "ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

";
        // line 108
        echo "div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 112
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "success", array());
        echo ";
    color: ";
        // line 113
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
}
div.flash-error {
    background: ";
        // line 116
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "danger", array());
        echo ";
    color: ";
        // line 117
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

";
        // line 126
        echo ".label:not([class*=label-]) {
    background: ";
        // line 127
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_darker", array());
        echo ";
}
.label {
    color: ";
        // line 130
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    ";
        // line 139
        echo "    background: ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "success", array());
        echo " !important;
}
.label-danger {
    ";
        // line 143
        echo "    background: ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "danger", array());
        echo " !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 149
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
        echo ";
    padding: 4px 8px;
}

";
        // line 154
        echo ".boolean .label,
.toggle .label {
    min-width: 33px;
}

";
        // line 163
        echo ".toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    background: ";
        // line 190
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "success", array());
        echo ";
    border-color: ";
        // line 191
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "success", array());
        echo ";
    color: ";
        // line 192
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    background: ";
        // line 201
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "danger", array());
        echo ";
    border-color: ";
        // line 202
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "danger", array());
        echo ";
    color: ";
        // line 203
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: ";
        // line 211
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

";
        // line 227
        echo "span.badge {
    background-color: ";
        // line 228
        echo ($context["brand_color"] ?? null);
        echo ";
}

";
        // line 233
        echo ".btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
";
        // line 250
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 251
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 252
($context["color_scheme"] ?? null))) {
            // line 253
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 255
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 258
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "text", array());
        echo ";
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: ";
        // line 279
        echo ($context["brand_color"] ?? null);
        echo ";
    border-color: transparent;
    color: ";
        // line 281
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: #39a0ed;
    border-color: transparent;
    color: ";
        // line 290
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: ";
        // line 305
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "danger", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 307
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 315
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "success", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 317
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
}

";
        // line 321
        echo ".btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: ";
        // line 327
        echo ($context["brand_color"] ?? null);
        echo ";
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

";
        // line 356
        echo ".form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 361
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray", array());
        echo ";
    border-radius: 0;
";
        // line 363
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 364
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 366
        echo "    color: ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 371
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 372
            echo "    border-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_dark", array());
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 374
($context["color_scheme"] ?? null))) {
            // line 375
            echo "    border-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 377
        echo "}

.has-error .error-block {
    color: ";
        // line 380
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "danger", array());
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 396
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "text_muted", array());
        echo ";
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
";
        // line 406
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 407
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 408
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 409
($context["color_scheme"] ?? null))) {
            // line 410
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 411
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 413
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 415
        if (((array_key_exists("kernel_debug", $context)) ? (_twig_default_filter(($context["kernel_debug"] ?? null), false)) : (false))) {
            // line 416
            echo "    height: 85px;
    padding-bottom: 45px;
";
        }
        // line 419
        echo "    z-index: 9999;
}

";
        // line 424
        echo ".field-collection .collection-empty {
    margin: .5em 0;
}

";
        // line 430
        echo ".field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
";
        // line 435
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 436
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 437
($context["color_scheme"] ?? null))) {
            // line 438
            echo "    border-top-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 440
        echo "}
.field-group .field-divider hr {
";
        // line 442
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 443
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 444
($context["color_scheme"] ?? null))) {
            // line 445
            echo "    border-top-color: #EEE;
";
        }
        // line 447
        echo "}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
";
        // line 453
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 454
            echo "    border-bottom: 1px solid ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
            echo ";
    color: ";
            // line 455
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 456
($context["color_scheme"] ?? null))) {
            // line 457
            echo "    border-bottom: 1px solid #EEE;
    color: ";
            // line 458
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 460
        echo "    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
";
        // line 464
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 465
            echo "    color: #555;
";
        } elseif (("light" ==         // line 466
($context["color_scheme"] ?? null))) {
            // line 467
            echo "    color: #777;
";
        }
        // line 469
        echo "    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
";
        // line 476
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 477
            echo "    border: 1px solid #DDD;
";
        } elseif (("light" ==         // line 478
($context["color_scheme"] ?? null))) {
            // line 479
            echo "    border: 1px solid #EEE;
";
        }
        // line 481
        echo "    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
";
        // line 484
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 485
            echo "    color: #555;
";
        } elseif (("light" ==         // line 486
($context["color_scheme"] ?? null))) {
            // line 487
            echo "    color: #777;
";
        }
        // line 489
        echo "    margin-right: 2px;
}
.field-group .box-header.with-border {
";
        // line 492
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 493
            echo "    background: #F0F0F0;
    border-bottom-color: #DDD;
";
        } elseif (("light" ==         // line 495
($context["color_scheme"] ?? null))) {
            // line 496
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
            echo ";
    border-bottom-color: #EEE;
    color: ";
            // line 498
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 500
        echo "    padding: 11px 10px 9px;
}
";
        // line 502
        if (("light" == ($context["color_scheme"] ?? null))) {
            // line 503
            echo ".field-group .box-header .box-title {
    color: #777;
}
";
        }
        // line 507
        echo ".field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

";
        // line 517
        echo ".select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 521
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray", array());
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 524
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 532
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "text", array());
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 539
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 543
        echo ($context["brand_color"] ?? null);
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 546
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "text", array());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 549
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "danger", array());
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 555
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_dark", array());
        echo ";
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

";
        // line 568
        echo ".easyadmin-vich-image img {
    border: 3px solid ";
        // line 569
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 570
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray", array());
        echo ";
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
";
        // line 583
        echo ".easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

";
        // line 593
        echo ".easyadmin-thumbnail img {
    border: 3px solid ";
        // line 594
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 595
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray", array());
        echo ";
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

";
        // line 617
        echo ".modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 625
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    border-top: 1px solid ";
        // line 626
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
        echo ";
    margin-top: 1.5em;
}

";
        // line 632
        echo ".newrow, .new-row {
    clear: both;
    display: block;
}

";
        // line 640
        echo "
";
        // line 643
        echo ".content-wrapper {
    background: ";
        // line 644
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "page_background", array());
        echo ";
}
.fixed .content-wrapper {
    padding-top: 50px;
}

";
        // line 652
        echo ".main-header {
    background: ";
        // line 653
        echo ($context["brand_color"] ?? null);
        echo ";
    position: relative;
}
.main-header .logo {
    color: ";
        // line 657
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; ";
        // line 659
        echo "    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: ";
        // line 684
        echo ($context["brand_color"] ?? null);
        echo ";
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: ";
        // line 703
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

";
        // line 760
        echo "#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

";
        // line 776
        echo ".main-sidebar,
.wrapper {
";
        // line 778
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 779
            echo "    background-color: #333;
";
        } elseif (("light" ==         // line 780
($context["color_scheme"] ?? null))) {
            // line 781
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        }
        // line 783
        echo "}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
";
        // line 789
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 790
            echo "    color: #777;
";
        } elseif (("light" ==         // line 791
($context["color_scheme"] ?? null))) {
            // line 792
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        }
        // line 794
        echo "    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
";
        // line 799
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 800
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 801
($context["color_scheme"] ?? null))) {
            // line 802
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 804
        echo "    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
";
        // line 821
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 822
            echo "    background: #333;
    color: #CCC;
";
        } elseif (("light" ==         // line 824
($context["color_scheme"] ?? null))) {
            // line 825
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 827
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
";
        // line 833
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 834
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 835
($context["color_scheme"] ?? null))) {
            // line 836
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 838
        echo "    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
";
        // line 847
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 848
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
            echo ";
    background: #4D4D4D;
    border-left-color: #BBB;
";
        } elseif (("light" ==         // line 851
($context["color_scheme"] ?? null))) {
            // line 852
            echo "    background: #DCDCDC;
    border-left-color: #808080;
";
        }
        // line 855
        echo "}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

";
        // line 864
        echo ".sidebar-menu li > a > .pull-right {
    font-weight: bold;
    text-align: right;
}
";
        // line 869
        echo ".sidebar-menu li.active > a > .fa-angle-left {
    top: 30px;
    right: 0;
}

";
        // line 875
        echo ".sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
";
        // line 892
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 893
            echo "    background: #333;
";
        } elseif (("light" ==         // line 894
($context["color_scheme"] ?? null))) {
            // line 895
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        }
        // line 897
        echo "}

";
        // line 900
        echo ".sidebar-mini.sidebar-collapse .sidebar-menu li.header {
";
        // line 901
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 902
            echo "    border-bottom: 1px solid #777;
";
        } elseif (("light" ==         // line 903
($context["color_scheme"] ?? null))) {
            // line 904
            echo "    border-bottom: 1px solid #BBB;
";
        }
        // line 906
        echo "    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

";
        // line 916
        echo "body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
";
        // line 921
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 922
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 923
($context["color_scheme"] ?? null))) {
            // line 924
            echo "    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: ";
            // line 926
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "text_muted", array());
            echo ";
";
        }
        // line 928
        echo "    margin: 10px 0 5px;
}

";
        // line 934
        echo "
body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

";
        // line 970
        echo "body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 983
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
";
        // line 984
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 985
            echo "    border: 1px solid ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 986
($context["color_scheme"] ?? null))) {
            // line 987
            echo "    border: 1px solid ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 989
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 993
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "table_row_border", array());
        echo ";
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

";
        // line 1034
        echo "body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

";
        // line 1047
        echo "body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 1054
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1055
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "text_muted", array());
            echo ";
";
        } elseif (("light" ==         // line 1056
($context["color_scheme"] ?? null))) {
            // line 1057
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 1059
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 1061
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
    border-color: ";
        // line 1062
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
        echo ";
    border-radius: 0;
    color: ";
        // line 1064
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "text", array());
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 1067
        echo ($context["brand_color"] ?? null);
        echo ";
    color: ";
        // line 1068
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
";
        // line 1080
        echo "body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

";
        // line 1088
        echo "form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 1090
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "danger", array());
        echo ";
    font-size: 16px;
}

";
        // line 1097
        echo "body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1119
        echo "body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1141
        echo "body.show .form-control {
";
        // line 1142
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1143
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1144
($context["color_scheme"] ?? null))) {
            // line 1145
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 1147
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

";
        // line 1161
        echo "body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: ";
        // line 1166
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
    border: 1px solid ";
        // line 1167
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 1168
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
        echo ";
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 1173
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "danger", array());
        echo ";
    color: ";
        // line 1174
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

";
        // line 1190
        echo "
";
        // line 1194
        echo "@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; ";
        // line 1218
        echo "        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    ";
        // line 1265
        echo "    body.list table {
        background: ";
        // line 1266
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
        echo ";
        border: 1px solid ";
        // line 1267
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "table_border", array());
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1273
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "table_header", array());
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1277
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray", array());
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1282
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "text", array());
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1288
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1293
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1294
            echo "        background: ";
            echo ($context["brand_color"] ?? null);
            echo ";
        color: ";
            // line 1295
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
            echo ";
";
        }
        // line 1297
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1300
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1301
            echo "        color: ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1302
($context["color_scheme"] ?? null))) {
            // line 1303
            echo "        color: ";
            echo ($context["brand_color"] ?? null);
            echo ";
";
        }
        // line 1305
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 1313
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1316
        echo ($context["brand_color"] ?? null);
        echo ";
    }
    ";
        // line 1319
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1320
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1321
            echo "        border-left: 1px solid ";
            echo ($context["brand_color"] ?? null);
            echo ";
        border-top: 1px solid ";
            // line 1322
            echo ($context["brand_color"] ?? null);
            echo ";
";
        }
        // line 1324
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1326
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_light", array());
        echo ";
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 1335
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "table_row_border", array());
        echo ";
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 1347
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_lighter", array());
        echo ";
        border-color: ";
        // line 1348
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "table_row_border", array());
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1351
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    ";
        // line 1391
        echo "    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/css/easyadmin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1885 => 1391,  1844 => 1351,  1838 => 1348,  1834 => 1347,  1819 => 1335,  1807 => 1326,  1803 => 1324,  1798 => 1322,  1793 => 1321,  1791 => 1320,  1788 => 1319,  1783 => 1316,  1777 => 1313,  1767 => 1305,  1761 => 1303,  1759 => 1302,  1754 => 1301,  1752 => 1300,  1747 => 1297,  1742 => 1295,  1737 => 1294,  1735 => 1293,  1727 => 1288,  1718 => 1282,  1710 => 1277,  1703 => 1273,  1694 => 1267,  1690 => 1266,  1687 => 1265,  1639 => 1218,  1614 => 1194,  1611 => 1190,  1595 => 1174,  1591 => 1173,  1583 => 1168,  1579 => 1167,  1575 => 1166,  1568 => 1161,  1555 => 1147,  1549 => 1145,  1547 => 1144,  1542 => 1143,  1540 => 1142,  1537 => 1141,  1516 => 1119,  1495 => 1097,  1488 => 1090,  1484 => 1088,  1477 => 1080,  1465 => 1068,  1461 => 1067,  1455 => 1064,  1450 => 1062,  1446 => 1061,  1442 => 1059,  1436 => 1057,  1434 => 1056,  1429 => 1055,  1427 => 1054,  1418 => 1047,  1405 => 1034,  1363 => 993,  1357 => 989,  1351 => 987,  1349 => 986,  1344 => 985,  1342 => 984,  1338 => 983,  1323 => 970,  1287 => 934,  1282 => 928,  1277 => 926,  1273 => 924,  1271 => 923,  1266 => 922,  1264 => 921,  1257 => 916,  1248 => 906,  1244 => 904,  1242 => 903,  1239 => 902,  1237 => 901,  1234 => 900,  1230 => 897,  1224 => 895,  1222 => 894,  1219 => 893,  1217 => 892,  1198 => 875,  1191 => 869,  1185 => 864,  1175 => 855,  1170 => 852,  1168 => 851,  1161 => 848,  1159 => 847,  1148 => 838,  1142 => 836,  1140 => 835,  1137 => 834,  1135 => 833,  1127 => 827,  1121 => 825,  1119 => 824,  1115 => 822,  1113 => 821,  1094 => 804,  1088 => 802,  1086 => 801,  1083 => 800,  1081 => 799,  1074 => 794,  1068 => 792,  1066 => 791,  1063 => 790,  1061 => 789,  1053 => 783,  1047 => 781,  1045 => 780,  1042 => 779,  1040 => 778,  1036 => 776,  1020 => 760,  962 => 703,  940 => 684,  913 => 659,  909 => 657,  902 => 653,  899 => 652,  890 => 644,  887 => 643,  884 => 640,  877 => 632,  870 => 626,  866 => 625,  856 => 617,  833 => 595,  829 => 594,  826 => 593,  816 => 583,  801 => 570,  797 => 569,  794 => 568,  780 => 555,  771 => 549,  765 => 546,  759 => 543,  752 => 539,  742 => 532,  731 => 524,  725 => 521,  719 => 517,  710 => 507,  704 => 503,  702 => 502,  698 => 500,  693 => 498,  687 => 496,  685 => 495,  681 => 493,  679 => 492,  674 => 489,  670 => 487,  668 => 486,  665 => 485,  663 => 484,  658 => 481,  654 => 479,  652 => 478,  649 => 477,  647 => 476,  638 => 469,  634 => 467,  632 => 466,  629 => 465,  627 => 464,  621 => 460,  616 => 458,  613 => 457,  611 => 456,  607 => 455,  602 => 454,  600 => 453,  592 => 447,  588 => 445,  586 => 444,  583 => 443,  581 => 442,  577 => 440,  571 => 438,  569 => 437,  566 => 436,  564 => 435,  557 => 430,  551 => 424,  546 => 419,  541 => 416,  539 => 415,  535 => 413,  530 => 411,  525 => 410,  523 => 409,  519 => 408,  514 => 407,  512 => 406,  499 => 396,  480 => 380,  475 => 377,  469 => 375,  467 => 374,  461 => 372,  459 => 371,  450 => 366,  446 => 364,  444 => 363,  439 => 361,  432 => 356,  402 => 327,  394 => 321,  388 => 317,  383 => 315,  372 => 307,  367 => 305,  349 => 290,  337 => 281,  332 => 279,  308 => 258,  303 => 255,  297 => 253,  295 => 252,  290 => 251,  288 => 250,  269 => 233,  263 => 228,  260 => 227,  243 => 211,  232 => 203,  228 => 202,  224 => 201,  212 => 192,  208 => 191,  204 => 190,  175 => 163,  168 => 154,  161 => 149,  151 => 143,  144 => 139,  133 => 130,  127 => 127,  124 => 126,  115 => 117,  111 => 116,  105 => 113,  101 => 112,  95 => 108,  77 => 90,  67 => 81,  60 => 77,  45 => 66,  39 => 60,  32 => 52,  29 => 45,  27 => 44,  24 => 43,  22 => 5,  19 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/css/easyadmin.css.twig", "/Users/clement/Projet/Distri/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/css/easyadmin.css.twig");
    }
}
