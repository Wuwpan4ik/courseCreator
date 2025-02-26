<?php
    return '
        <html lang="RU">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body style="padding:0px;margin:0px;max-width: 800px;font-family: Verdana, Geneva, Tahoma, sans-serif;background: #EFEFEF;">
            <style>
                th{
                    font-size: 16px;
        font-weight: 400;
        color: #666666;
                    padding:10px 0px;
                }
            </style>
            <div class="envelope-container" style="max-width: 500px; width:100%; margin:0 auto;">
                <div class="envelope-body" style="background:white;">
                    <div class="first_row">
                        <img style="width:100%;" src="https://course-creator.io/envelope-images/envelope-zayavka.jpg" alt="Добро пожаловать в Course Creator!">
                    </div>
                    <div class="second_row" style="padding:40px;">
                        <h2 style="font-size:24px;font-weight: 400;margin-top: 0px;margin-left:0px;margin-bottom: 20px;margin-right: 0px;">
                            Вам пришло письмо от '. $email .'
                        </h2>
                        <div style="color: rgba(0, 0, 0, 0.6);font-size:16px;font-weight:400;background:#EFF3F6; padding-top:12px;padding-bottom: 12px;padding-left: 20px;padding-right: 20px;">
                            '. $question .'
                        </div>
                        <div class="info_account" style="margin-top: 20px;">
                            <table style="width:100%;padding-top: 30px;border-top: 1px dashed rgba(0, 0, 0, 0.2);margin-bottom: 0px;">
                                <thead>
                                    <tr>
                                        <th style="text-align:start;">
                                            Откуда пришло:
                                        </th>
                                        <th></th>
                                        <th style="text-align:end;">
                                            '. $name .'
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:start;">
                                            От кого пришло:
                                        </th>
                                        <th></th>
                                        <th style="text-align:end;">
                                            '. $email .'
                                        </th>
                                    </tr>
                                    <tr>
                                        <th style="text-align:start;">
                                            Когда пришло:
                                        </th>
                                        <th></th>
                                        <th style="text-align:end;">
                                            '. $time .'
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="envelope_info_bottom" style="text-align: center;margin-top:20px;margin-bottom: 20px;">
                    <div style="font-size:12px;">
                        Если у вас есть вопросы, пожалуйста, напишите <br> в службу поддержки: <a href="mailto:support@course-creator.io">support@course-creator.io</a>
                    </div>
                </div>
            </div>
        </body>
    </html>';