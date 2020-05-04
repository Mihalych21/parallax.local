<?php
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use yii\widgets\Pjax;

header('Last-Modified:' . gmdate("D, d M Y H:i:s \G\M\T", $data[1]));
$this->title = $data[0]['title'];
$this->registerMetaTag(['name' => 'keywords', 'content' => $data[0]['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => $data[0]['descrition']]);
?>
<article>
    <div class="container">
        <h2 class="header_shadow text-center">Мебель на заказ в Чебоксарах по Вашим размерам и приемлемым ценам.</h2>
        <p class="text-center">
            Мебель на заказ это возможность без особых усилий выбрать или заказать самую разную корпусную мебель:
            например <a href="/galery/kitchen" class="strong">кухни на заказ</a>, <a href="/galery/kupe" class="strong">шкафы
                купе на заказ</a> <a href="/galery/racks" class="strong">гардеробные на заказ</a>, <b>мебель для
                спальни</b>, <b>мебель для офиса</b> (как то
            ресепшн или например столы самого разного назначения).Заказать выезд дизайнера-замерщика
            Вы можете нажав кнопку в левой части экрана или набрав любой из наших номеров
            телефона.Заказав изготовление корпусной мебели на заказ в Чебоксарах от фабрики <span
                    class="solo header_shadow">SOLO</span> Вы
            гарантированно получите мебель напрямую без переплат и посредников.
        </p>
    </div>
    <!-- SERVICES SECTION -->
    <div class="h2 header_shadow text-center">Почему наша мебель дешевле?</div>
    <div class="flex-center">
        <div class="about" data-scrollreveal="enter bottom and move 100px, wait 0.5s">
            <i class="fa fa-cogs fa-5x"></i>
            <div class="h3 underline">Собственное современное производство</div>
            <p class="about-p">
                Именно собственное производство мебели позволяет нам предлагать нашим клиентам
                выгодные цены и гарантировать качественную продукцию.
            </p>
        </div>
        <!--<div class="about" data-scrollreveal="enter bottom and move 100px, wait 0.5s">
            <i class="fa fa-plug fa-5x color-blue"></i>
            <div class="h3 underline">Стоимость встраиваемой техники ниже розничных</div>
            <p class="about-p">
                У нас налажены постоянные контакты с оптовыми поставщиками бытовой техники.
            </p>
        </div>-->
        <div class="about" data-scrollreveal="enter bottom and move 100px, wait 0.5s">
            <!--        <div style="font-size: 5em">-->
            <i class="fa fa-ruble-sign color-red fa-5x"></i>
            <!--            <i class="fa fa-thumbs-up"></i>-->
            <!--        </div>-->
            <div class="h3 underline">Приемлемые цены и сроки исполнения заказа</div>
            <p class="about-p">
                На каждую мебель непременно персональный подход и взвешенная ценовая политика.
            </p>
        </div>
    </div>
</article>
<!--END SERVICES SECTION -->

<!--Новинки-->

<div class="container">
    <div class="h2 text-center header_shadow" data-scrollreveal="enter top and move 100px, wait 0.5s">Популярная
        корпусная мебель
        от <span class="solo">SOLO</span>
    </div>
    <div class="thumbs-flex">
        <div data-scrollreveal="enter top and move 100px, wait 0.5s">
            <a href="/galery/kitchen">
                <figure class="snip1477 raised">
                    <img width="250" height="170" src="/img/new-icon/item1.jpg" alt=""/>
                    <div class="title">
                        <div class="h2" data-scrollreveal="enter top and move 800px, wait 0.9s">
                            <span class="h2-price">120 000</span>&nbsp;<i class="fa fa-ruble-sign"></i>
                        </div>
                    </div>
                    <figcaption>
                        кухня
                        фасады пластик."Фартук" с фотопечатью
                        </p>
                    </figcaption>
                </figure>
            </a>
        </div>
        <div data-scrollreveal="enter top and move 100px, wait 0.5s">
            <a href="/galery/kupe">
                <figure class="snip1477 raised">
                    <img width="250" height="170" src="/img/new-icon/item2.jpg" alt=""/>
                    <div class="title">
                        <div class="h2" data-scrollreveal="enter top and move 800px, wait 1.1s">
                            70 000&nbsp;<i class="fa fa-ruble-sign"></i>
                        </div>
                    </div>
                    <figcaption>
                        радиусный шкаф-купе
                    </figcaption>
                </figure>
            </a>
        </div>
        <div data-scrollreveal="enter top and move 100px, wait 0.5s">
            <a href="/galery/kitchen">
                <figure class="snip1477 raised">
                    <img width="250" height="170" src="/img/new-icon/item3.jpg" alt=""/>
                    <div class="title">
                        <div class="h2" data-scrollreveal="enter top and move 800px, wait 1.3s">
                            95 000&nbsp;<i class="fa fa-ruble-sign"></i>
                        </div>
                    </div>
                    <figcaption>
                        кухня фасады - пластик
                    </figcaption>
                </figure>
            </a>
        </div>
        <div data-scrollreveal="enter top and move 100px, wait 0.5s">
            <a href="/galery/kupe">
                <figure class="snip1477 raised">
                    <img width="250" height="170" src="/img/new-icon/item4.jpg" alt=""/>
                    <div class="title">
                        <div class="h2" data-scrollreveal="enter top and move 800px, wait 1.5s">
                            150 000&nbsp;<i class="fa fa-ruble-sign"></i>
                        </div>
                    </div>
                    <figcaption>
                        радиусный шкаф-купе-гардеробная
                    </figcaption>
                </figure>
            </a>
        </div>
    </div>

</div>
<br>
<p class="container mebel-p">
    Заказав у нас мебель на заказ, для Вас есть возможность превратить
    все Ваши задумки о комфортном и уютном жилье в реальность. Вы не будете подстраиваться
    и зависеть от стандартных форм и дизайнерских решений а придумаете свою мебель сами.
    В чем мы Вам с удовольствием поможем. Наша работа будет заключатсься лишь в помощи для вас
    в выборе оптимальных вариантов в выборе наилучших материалов и технологических решений.
</p>
<!--/Новинки-->
<br>
<br>
<br>
<!--иконки Kitchen-->
<article>
    <h2 class="text-center header_shadow" data-scrollreveal="enter top and move 100px, wait 0.5s">Кухни на заказ в
        Чебоксарах по индивидуальным размерам</h2>
    <br>
    <div class="flex-center">
        <?php
        $i = 1;
        $priceDelay = 0.9;
        require_once __DIR__ . '/inc/kitchenArr.php';
        ?>
        <?php while (file_exists(__DIR__ . '/../../web/img/kitchen-icon/item' . $i . '.jpg')) : ?>
            <div data-scrollreveal="enter top and move 100px, wait 0.5s">
                <a href="/galery/kitchen" title="<?= $kitchenText[$i - 1] ?>">
                    <figure class="snip1477 raised">
                        <img width="250" height="170" src="/img/kitchen-icon/item<?= $i ?>.jpg"
                             alt="кухня <?= $kitchenText[$i - 1] ?>"/>
                        <div class="title">
                            <div class="h2" data-scrollreveal="enter top and move 300px, wait <?= $priceDelay ?>s">
                                <span class="h2-price"><?= $kitchenPrice[$i - 1] ?></span>&nbsp;<i
                                        class="fa fa-ruble-sign"></i>
                            </div>
                        </div>
                        <figcaption>
                            <!--                        <p>кухня<br>-->
                            <?= $kitchenText[$i - 1] ?>
                            </p>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <?php
            $i++;
            $priceDelay += 0.3;
            ?>
        <?php endwhile; ?>
    </div>
    <h2 class="text-center header_shadow">Широкий выбор кухонь от производителя</h2>
    <p class="container mebel-p" data-scrollreveal="enter top and move 100px, wait 0.5s">
        Заказывая мебель для кухни на заказ в Чебоксарах, Вам следует обратить внимание как на
        цены так и на качество используемых материалов и фурнитуры.Мы используем материалы только
        хорошо зарекомендовавших себя производителей и поставщиков.Что позволяет нам производить <strong>мебель для
            кухни высокого качества</strong>.<br>
        Цена на мебель зачастую определяеться ценой используемого фасадного материала.
        Здесь мы можем предложить Вам очень широкий выбор материалов и расцветок.
        Мы производим фасады в самых разных цветовых решениях.Это может быть и Al профиль в самых разных сочетаниях, и
        благородный массив дерева.
        МДФ под покраску, пластик, и конечно же ЛДСП.На Ваш выбор огромное количество цветовых решений.
    </p>
</article>
<!--/иконки Kitchen-->
<br>
<br>
<br>
<!--Kupe-->
<article>
    <h2 class="text-center header_shadow" data-scrollreveal="enter top and move 100px, wait 0.5s">Радиусный шкаф
        купе</h2>
    <br>
    <div class="flex-center">
        <?php
        $i = 1;
        $priceDelay = 0.9;
        require_once __DIR__ . '/inc/kupeArr.php';
        ?>
        <?php while (file_exists(__DIR__ . '/../../web/img/kupe-icon/item' . $i . '.jpg')) : ?>
            <div data-scrollreveal="enter top and move 100px, wait 0.5s">
                <a href="/galery/kupe" title=" <?= $kupeText[$i - 1] ?>">
                    <figure class="snip1477 raised">
                        <img width="250" height="170" src="/img/kupe-icon/item<?= $i ?>.jpg"
                             alt="шкаф-купе <?= $kupeText[$i - 1] ?>"/>
                        <div class="title">
                            <div class="h2" data-scrollreveal="enter top and move 300px, wait <?= $priceDelay ?>s">
                                <span class="h2-price"><?= $kupePrice[$i - 1] ?></span>&nbsp;<i
                                        class="fa fa-ruble-sign"></i>
                            </div>
                        </div>
                        <figcaption>
                            <!--                            <p>шкаф-купе<br>-->
                            <?= $kupeText[$i - 1] ?>
                            </p>
                        </figcaption>
                    </figure>
                </a>
            </div>
            <?php
            $i++;
            $priceDelay += 0.3;
            ?>
        <?php endwhile; ?>
    </div>
    <p class="container mebel-p" data-scrollreveal="enter top and move 100px, wait 0.5s">
        <strong>Радиусные шкафы купе</strong>,они же радиальные шкафы купе (существуют и те и те названия) от
        уже привычных нам устоявшихся моделей с плоскими дверьми и четырьмя углами отлично выверены
        своими текучими формами и впишутся в самый замысловатый интерьер.При их изготовлении
        используются специальные радиусные профили и вставки из высококачественного лдсп, оргстекла
        ,плдимеров. Преимущество для вас заказа радиусных шкафов-купе у нас в том, что мы уже много
        лет занимаемся производством таких шкафов и гарантируем качество исполнения.
    </p>
</article>
<!--/Kupe-->
<br>
<br>
<br>
<br>
<!--детские-->
<div class="container flex-center" style="width: 100%;max-width:1366px;padding: 2em">
    <figure style="float:left;margin-right: 3em;">
        <img data-scrollreveal="enter left and move 500px, wait 0.5s" width="500px" src="/img/wall/wall.jpg" alt="">
    </figure>
    <article class="mebel-p" style="max-width: 500px">
        <h2>Стенки для гостиной</h2>
        <p>
            <strong>Стенки</strong> в нынешнее время это не те, которые кому то помняться стоявшими
            почти в каждой квартире и к сожалению мало отличавшимися друг от друга.
            Современное испольнение этой важной мебели для гостинной видиться не только как
            банальный шкаф для самого разного наполнения, но и как возможность улучшить или
            сделать более выразительным дизайн комнаты.<br>
            Независимо от того что Вы намереваетесь хранить в стенке мы предложим Вам любое яркое
            исполнение обеспечивающее Ваши идеи и проекты.<br>
            Для блистающих широтой интерьеров стенка лишь подчеркнет Ваши дизайнерские мысли,
            и в малогабаритных пространствах удачно скроет возможные недостатки и не загромоздит
            помещение.
            <br>
            <br>
            <a class="icon-btn2" href="/galery/wall">стенки для гостинной</a>
        </p>
    </article>
</div>
<br>
<br>
<br>
<!--/детские-->
<!--офис-->
<div class="container flex-center" style="padding: 2em;max-width:1366px;">
    <article class="mebel-p" style="max-width: 500px">
        <h2>Офисная мебель</h2>
        <p>Выбирая офисную мебель все таки на что нужно обратиь внимание? Первое, о чем подумает
            "офиссный планктон" конечно же насколько она удобна.Проводить там придеться весь рабочий
            день.И руководящему менеджменту стоит позаботиться о своих подопечных, ведь лишь создав
            комфортный микроклимат работникам можно ждать хороших показателей и возможное отсутствие
            текучки кадров.
            <br>
            <br>
            <a class="icon-btn2" href="/galery/office">мебель для офиса</a>
        </p>
    </article>
    <figure style="margin-left: 3em;">
        <img data-scrollreveal="enter right and move 500px, wait 0.5s" width="500px" src="/img/office/office.jpg"
             alt="">
    </figure>
</div>
<br>
<br>
<br>
<!--/офис-->
<!--детские-->
<div class="container flex-center" style="width: 100%;max-width:1366px;padding: 2em">
    <figure style="float:left;margin-right: 3em;">
        <img data-scrollreveal="enter left and move 500px, wait 0.5s" width="500px" src="/img/childrens/childrens.jpg"
             alt="">
    </figure>
    <article class="mebel-p" style="max-width: 500px">
        <h2>Детские комнаты</h2>
        <p>
            Детская комната - не только то самое помещение, где дети спят и играют, но и гораздо большее.Здесь ребенок должен впитывать лишь самое лучшее и конечно же быть в полном
            комфорте, да же в отсутствии родителей :).
            Тем более не жалейте Ваших сил и времени в выборе детской комнаты т.к. это безопасность
            и благополучие детей в Вашем доме.
            Непременно акцентируйте внимание на таких предметах как кровать и стол для детей.
            Для тех же у кого семья все таки многодетная и да же различна по возрасту всегда есть
            способы как это все обустроить максимально удобно эргономично и безопасно.
            <br>
            <br>
            <a class="icon-btn2" href="/galery/childrens">мебель для детской</a>
        </p>
    </article>
</div>
<br>
<br>
<br>
<!--/детские-->
<!--прихожие-->
<div class="container flex-center" style="padding: 2em;max-width:1366px;">
    <article class="mebel-p" style="max-width: 500px">
        <h2>Прихожие</h2>
        <p>
            Что увидит человек придя к Вам в гости? В певую очередь это будет <strong>прихожая</strong>!
            Увидит и как сложены Ваши вещи и каким образом они хранятся.Недооценивайте значимость
            этго иногда совсем маленького но так необходимого пространства.Да же в случаях квартир
            совсем небольших современность предлагает кучу всяких решений воизбежание всяких антресолей
            и прочих штампов из недавнего прошлого.Хорошая прихожая так же гармонична как и вся остальная квартира или дом.Здесь есть большое количество вариантов как от бюджетных так и
            до премиум решений.
            <br>
            <br>
            <a class="icon-btn2" href="/galery/hall">прихожие</a>
        </p>
    </article>
    <figure style="margin-left: 3em;">
        <img data-scrollreveal="enter right and move 500px, wait 0.5s" width="500px" src="/img/hall/hall.jpg" alt="">
    </figure>
</div>
<br>
<br>
<br>
<!--/прихожие-->
<div class="h2 header_shadow text-center">Несложные действия для приобретения мебели</div>
<div class="h3 text-center">
    Позвоните нам на любой из номеров:<br>
    <a href="tel:+78352375700"><b class="tel" itemprop="telephone">+7(8352) 37-57-00</b></a><br>
    <a href="tel:+79023274546"><b class="tel" itemprop="telephone">+7(902) 327-45-46</b></a><br>
    <div class="h3">далее:</div>
</div>

<div class="flex-center">
    <div class="about" data-scrollreveal="enter right and move 500px, wait 0.2s">
        <img class="" src="/img/team/zamer.jpg" alt="">
        <div class="h4 text-center text-uppercase">приезжает замерщик</div>
        <p>
            В приемлемое для Вас время наш специалист сделает подробный замер Вашего помещения.
        </p>
    </div>
    <div class="about-chevron fa fa-chevron-right" data-scrollreveal="enter right and move 500px, wait 0.2s"></div>
    <div class="about" data-scrollreveal="enter right and move 500px, wait 0.5s">
        <img class="" src="/img/team/eskiz.jpg" alt="">
        <div class="h4 text-center text-uppercase">дизайн проект</div>
        <p class="text-center">
            На этом этапе подробно обговариваются все особенности Вашей будущей мебели (материалы, фурнитура, и. т. п).
            Рассчитывается итоговая цена.
            Далее согласовав с Вами все нюансы мы приступаем к производству.
        </p>
    </div>
    <div class="about-chevron fa fa-chevron-right" data-scrollreveal="enter right and move 500px, wait 0.2s"></div>
    <div class="about" data-scrollreveal="enter right and move 500px, wait 0.8s">
        <img class="" src="/img/team/dostavka.jpg" alt="">
        <div class="h4 text-center text-uppercase">доставим в условленное время</div>
        <p>
            Заблаговременно связываемся с Вами, уточняем время и доставляем мебель собственным транспортом.
        </p>
    </div>
    <div class="about-chevron fa fa-chevron-right" data-scrollreveal="enter right and move 500px, wait 0.2s"></div>
    <div class="about" data-scrollreveal="enter right and move 500px, wait 1.1s">
        <img class="" src="/img/team/sborka.jpg" alt="">
        <div class="h4 text-center text-uppercase">собствено сборка</div>
        <p>
            Наши профессионалы соберут и установят мебель. Теперь эскиз стал реальностью!
        </p>
    </div>
</div>
<br>
<br>
<br>
<div class="container zvonok">
    <div class="zv-form-group" data-scrollreveal="enter bottom and move 100px, wait 0.7s">
        <h2 class="header_shadow zvonok-head">Есть вопросы?</h2>
        <p class="zvonok-p">
            Все возникшие вопросы Вы можете легко прояснить, оставив Ваши контактные данные.
            Мы обязательно перезвоним и дадим исчерпывающую консультацию!
        </p>
        <?php Pjax::begin([
            'clientOptions' => [
                'method' => 'POST',
//                'url' => '/zvonok'
            ],
            'id' => 'zvonok',
            'enablePushState' => false, // не обновлять url
            'timeout' => '20000',
//            'data-pjax-container' => '#zvonok-resp'
        ]);
        ?>
        <?php $form = ActiveForm::begin([
            'options' => ['class' => 'call', 'data-pjax' => true],
        ]);
        ?>
        <input type="text" name="name" placeholder="имя" , required>
        <!--        --><? //= $form->field($model, 'name')->textInput(['required' => true, 'tabindex' => '1']) ?>
        <?php
        echo MaskedInput::widget([
            'options' => [
                'required' => true,
                'placeholder' => 'тел',
            ],
            'name' => 'tel',
            'mask' => '+7 (999)-999-99-99',
        ]);
        ?>
        <i class=" fa fa-phone-volume"></i>
        <button type="submit" class="tel_but but_gr">жду звонка</button>
        <?php ActiveForm::end(); ?>
        <?php Pjax::end(); ?>
        <br>
        <p class="zvonok-pol">
            Нажимая на кнопку «жду звонка», я даю согласие на <a class="underline" rel="nofollow" href="/politic">обработку
                персональных
                данных</a> в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных»
        </p>
    </div>


    <img width="208" height="243" src="/img/call.jpg" alt="" data-scrollreveal="enter bottom and move 100px, wait 0.7s">
    <p class="zvonok-p" data-scrollreveal="enter bottom and move 100px, wait 0.7s">
        <span class="h3 header_shadow">Фабрика <span class="solo">SOLO</span> &mdash; выгодно и современно!</span>
        <br>
        <br>
        <strong>Мебель на заказ</strong> от SOLO это не только отсутствие посредников но и возможность выбрать товар из
        имеющегося на складе.
        Будь то <strong>радиусный шкаф купе</strong>, <strong>кухонный гарнитур</strong> или
        <strong>гардеробная</strong>.
        Приобретайте непосредственно у производителя!
    </p>
</div>
<br>
<br>
<!--noindex-->
<div class="h2" style="text-align: center">Отзывы наших клиентов</div>
<div class="container flex-center">

    <div class="otzyv-block">
        <img src="/web/img/user/user1.jpg" alt="">
        <p>
            <h3>Светлана</h3>
        <div class="h4">продавец-консультант</div>
        Спасибо компании «Соло мебель», а конкретно Владимиру, который собирал мой заказ,
        его терпению и доброжелательности!!! Сказать, честно, первый раз обратилась с индивидуальным
        проектом к компании без рекомендации, просто нажав на сайт в интернете)))
        Очень переживала, будет ли мой проект соответствовать всем требованиям)
        И поняла, что в нашем городе есть профессионалы своего дела! Спасибо огромное!
        </p>
    </div>
    <div class="otzyv-block">
        <img src="/web/img/user/user2.jpg" alt="">
        <p>
            <h3>Валерий</h3>
        <div class="h4">водитель</div>
        Нужна была мебель для загородного дома.
        Нашли ваш сайт и остались очень довольными. Дизайнер Владимир
        очень внимательно отнесся к нашим запросам и помог подобрать кухонную мебель.
        Бригада сборщиков работала аккуратно и качественно.
        Остались положительные эмоции от результата их работы. Спасибо.
        Нас устроила и цена и качество вашей мебели и выполненной работы.
        </p>
    </div>
    <div class="otzyv-block">
        <img src="/web/img/user/user3.jpg" alt="">
        <p>
            <h3>Екатерина</h3>
        <div class="h4">домохозяйка</div>
        После сделанного ремонта, настало время заказывать кухню!
        Долго ходили по магазинам в своем городе и перелопачен интернет.
        Наткнулись на сайт фирмы «Соло мебель».. Очень понравились фасады и цена за них
        адекватная…Решили сделать заказ в этой компании…Хочу сказать честно, что волновались
        сильно…Приехал замерщик Владимр — замерил, дал советы, составил проект. Через две недели
        уже привезли мебель. Мы считаем, что это очень оперативно.
        </p>
    </div>
</div>
<!--/noindex-->
<br>
<br>
<br>
<br>
<br>
<!--<div class="h2 header_shadow text-center">Будьте в курсе акций и скидок!</div>-->
<!--<div class="brands">
    <img width="188" height="52" src="/img/brands/hettich.jpg" alt=""
         data-scrollreveal="enter top and move 400px, wait 0.2s">
    <img width="188" height="52" src="/img/brands/blum .jpg" alt=""
         data-scrollreveal="enter top and move 400px, wait 0.4s">
    <img width="188" height="52" src="/img/brands/mak.jpg" alt=""
         data-scrollreveal="enter top and move 400px, wait 0.6s">
</div>-->

<script>
    var head_h = screen.height;
    //        console.log (head_h);
    document.getElementById('fh5co-hero').style.height = head_h + 'px';
    //    document.getElementById('fh5co-hero').style.top = 0;
</script>