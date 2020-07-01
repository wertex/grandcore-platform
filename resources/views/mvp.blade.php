
@extends('layouts.app')

@section('title', 'GrandCore Foundation | MVP Платформы')


@section('content')


<h1>GrandCore - MVP Платформы</h1>

<p><em>На основе фреймворка Laravel</em></p>

<span class="d-block p-2 bg-danger text-white"><h3>Визуализация</h3>
<ul>
	<li><a  target="_blank" href="https://www.mindomo.com/mindmap/83798b37459848089f13a01522e84907" class="text-white"><b><u>Проект в виде схемы</u></b></a></li>
	<li><a  target="_blank" class="text-white" href="https://www.figma.com/file/NlikNEJQHliYlxI3MHhiSW/Share?node-id=0%3A1"><b><u>Дизайн Экранов</u></b></a></li>
	<li>
		<a target="_blank" class="text-white" href="https://github.com/grandcore/grandcore-platform"><u><b>Git-репозиторий</b></u></a>
	</li>
</ul>
</span>

<h2>Цели проекта и требования к платформе</h2>

<p>Платформа создается, как первый опыт разработки универсального инструмента для коллективной работы над всеми этапами открытых проектами в рамках фонда GrandCore. </p>

<p>Для эффективной работы фонда необходимо создать удобные механики как для этапа генерации и структурирования идей, что даст возможность участвовать и быть полезными широким массам пользователей, так и инструменты для сбора средств и собственно разработки. </p>

<p>Основная техническая задача сейчас - сделать инструмент автоматизирующий все бизнес-процессы, используя практики не требующие траты большого количества времени.</p>

<p>Основная задача фонда сейчас - создать сообщество, которым будет собран пул перспективных проектов, требования и техзадания для них.</p>

<h2>TODO</h2>

<p>Планы по разработке MVP</p>

<p><strong>=> v 0.1</strong></p>

<ul>
<li>Регистрация пользователей по инвайтам</li>

<li>Добавление проектов и их лендингов из админки</li>

<li>Добавление заметок в скетчбуки проектов пользователями с премодерацией в админке</li>
</ul>

<p><strong>=> v 0.2</strong></p>

<ul>
<li>Завершение техзадания MVP</li>

<li>Проектирование всех экранов для MVP</li>

<li>Проектирование базы для MVP</li>

<li>Вёрстка всех экранов MVP с их интеграцией на платформе в демонстрационном виде</li>
</ul>

<p><strong>=> v 0.3</strong>
... Завершение MVP</p>

<h2>Концепции</h2>

<h3>Бизнес-процессы</h3>

<p>Бизнес-процессом является активность, в рамках которой производится работа над проектами и решаются административные вопросы связанные с фондом, платформой и участниками.</p>

<p>Процессу можно установить срок принятия решений. То есть, время, когда он будет завершен или отменен и отправлен в архив.</p>

<p>У процессов есть два статусы. Для каждого процесса они свои, при выборе финального статуса проект отправляется в архив. Менять статусы процессов могут  пользователи входящие в определенную группу. По сути, это является реализацией идеи канбана.</p>

<p>Процессы отличаются уникальным типом активностей: различные типы голосования, совместная работа над репозиториями проекта и др. Второй обязательный блок процесса это обсуждение.</p>

<p>Бизнес-процессы отображаются на странице проекта и в TODO подписанных на них пользователей. В TODO процессы сортируются по дате активности в них. Можно отфильтровать процессы по трем параметрам: процессы требующие внимания пользователя (например, ему написали в обсуждении процесса), открытые процессы проектов на которые подписан пользователь, а так же завершенные процессы проектов на которые подписан пользователь.</p>

<h3>Репозитории</h3>

<p>При создании проекта генерируются git-репозитории. Для каждого типа проекта они свои, при этом у каждого проекта есть репозиторий лендинга и документации.</p>

<p>После изменения репозитория генерируются соответствующие страницы для лендинга и документации, компилируются файлы релизов или просто принимается пул реквест. После изменений создается автоматическая запись в новостях проекта.</p>

<h2>Элементы платформы</h2>

<p>Ниже описываются элементы платформы и механики в их рамках, включая бизнес-процессы.</p>

<h3>Проект</h3>

<p>На странице аккумулируется весь контент, бизнес-процессы и другие активности проекта. Создаются проекты пользователями с помощью бизнес-процесса, запуск которого доступен на странице каталога проектов.</p>

<p>Блок подписки - каждый пользователь может подписаться на проект. Существует две подписки: на новости и на новые бизнес-процессы и активности внутри них. В первом случае новости проекта будут показываться в его новостной ленте, во втором - добавляться в его TODO менеджер.</p>

<p>Папки и теги - для каждого проекта можно указать теги, а так же обязательно указать его место в иерархии номенклатуры проектов. В данном блоке отображается дерево разделов и подразделов где лежит проект, а также теги. Нажав на эти ссылки, пользователь попадает в соответствующие разделы. Теги и папки проектов можно менять изменив репозиторий соответствующим бизнес-процессом.</p>

<p>Презентация - у каждого проекта есть своя страница-презентация, на которой рассказывается о проекте. В презентации могут использоваться фото/видео материалы и разные шаблонов для дизайна блоков. Страница модифицируется изменением репозитория с помощью соответствующего бизнес-процесса. После принятия изменений в репозитории, они автоматически применяются на странице проекта</p>

<p>Документация - у каждого проекта есть документация. Для разных типов проектов (ПО, стандарты изделий итд) будут приниматься свои стандарты оформления документации. После принятия изменений они так же как и презентациях проектов автоматически генерируются на странице проекта.</p>

<p>Скетчбук - пул идей и референсов для проектов. Каждый пользователь может предложить идею для проекта с помощью специального бизнес-процесса и в случае положительного решения сообщества, предложение отправляется в базу. Скетчбук  может состоять из следующих разделов: новые функции, дизайн и ui, оптимизация кода, схожие проекты, полезные материалы. Для каждого проекта можно создать свои теги. Заметки имеют рейтинг из пяти звёзд, для удобства сортировки по их важности. У каждой заметки указаны техзадания, которые были созданы на их основе.</p>

<p>Техзадания - создаются пользователями, в том числе, на основе материалов в скетчбуке проекта. На основе техзадания выполняются изменения в основных репозиториях проекта.</p>

<p>Предложения - пользователи могут подавать заявки на реализацию техзаданий. Как бесплатно, так и за гонорар. В случае одобрения предложения за гонорар открывается сбор средств.</p>

<p>Разработка - пул реквесты пользователелей, предложения по изменениям репозиториев которых были одобрены сообществом.</p>

<p>Релизы - блок релизов. Скомпилированные программы и прочие файлы проекта готовые к использованию.</p>

<p>Сообщество - помощь пользователям (платная и бесплатная), обсуждение проекта.</p>

<p>Магазин - покупка изделий и их составных частей, а так же платных дополнений для по.</p>

<p>Новости проекта - лента со всеми важными новостями проекта. Новые релизы, предложения и другие активности.</p>

<h3>Каталог проектов</h3>

<p>Проекты находятся в соответствующих  разделах и подразделах. Сортировка проектов в разделе может быть по имени и популярности. Дополнительная фильтрация по тегам уникальным для каждого раздела. В списке, в карточке проекта указывается его имя, логотип и краткое описание.</p>

<p>В списке проектов можно открыть процесс по созданию нового проекта. кроме того, посмотреть существующие процессы в которых обсуждаются новые проекты. Все пользователи автоматически подписаны на процессы создания новых проектов и учавствуют в обсуждении и голосовании.</p>

<p>При предложении нового проекта пользователь должен указать его название, место в каталоге проектов, а так же его манифест, который является отправной точкой для формирования требований к нему. Во время обсуждения пользователи с определенными правами могут менять и дополнять их.</p>

<h3>TODO</h3>

<p>Данный раздел представляет из себя список всех активностей проектов на которые подписан пользователь. Процессы сортируются по дате последней активности в них. У тасков есть три вида фильтрации - требуют участия (обращение к пользователю в обсуждении), открытые процессы, архив процессов в которых участвовал пользователь.</p>

<p>Кроме задач в проектах существует два специальных раздела, доступных всем пользователям, это голосование за новые проекты и закрытие неактуальных, а также задачи по работе с пользователями, такие как выдача и аннулирование прав на определенные действия в рамках платформы и фонда.</p>

<h3>Лента новостей</h3>

<p>Здесь отображаются все обновления проектов, на которые подписан пользователь. По сути, каждый пост это резюме завершенных бизнес-процессов таких как: новые релизы, новые заметки в скебуке итд.</p>

<h3>Пользователи</h3>

<p>Список участников проекта. Фильтрация по скилам и рейтингу участия. Каждый пользователь в списке отображается в виде визитки, которую он создал в своём личном кабинете.</p>

<p>На странице списка можно запустить бизнес-процесс для управления пользователями, который позволяет включить или исключить участника сообщества из групп (что дает права в определенных бизнес процессах), а так же забанить или разбанить пользователя.</p>

<h3>Профиль и настройки</h3>

<p>На странице своего профиля участник может удалить свой аккаунт, поменять данные о себе такие как аватар, имя, краткую биографию, ссылки на свои страницы в интернете.</p>

<h3>Личные сообщения</h3>

<p>В этом разделе пользователь может вести общение с участниками сообщества. Раздел выполнен в виде стандартного мессенджера. С левой стороны список диалогов, справа чат с пользователем, который выделен. </p>

<h3>Панель администратора</h3>

<p>В панели администратора можно управлять разделами и тегами, пользователями и группами, а так же влиять на исход бизнес процессов без голосования пользователями. Устанавливать права пользователям, а так же блокировать их так же в обход общего голосования. Администратор может сгенерировать инвайты для регистрации.</p>
@endsection
