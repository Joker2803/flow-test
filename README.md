# flow-test
git flow testing task
qaqnus@Lenovo:~$ git
usage: git [--version] [--help] [-C <path>] [-c <name>=<value>]
           [--exec-path[=<path>]] [--html-path] [--man-path] [--info-path]
           [-p | --paginate | -P | --no-pager] [--no-replace-objects] [--bare]
           [--git-dir=<path>] [--work-tree=<path>] [--namespace=<name>]
           <command> [<args>]

Стандартные команды Git используемые в различных ситуациях:

создание рабочей области (смотрите также: git help tutorial)
   clone             Клонирование репозитория в новый каталог
   init              Создание пустого репозитория Git или переинициализация существующего

работа с текущими изменениями (смотрите также: git help everyday)
   add               Добавление содержимого файла в индекс
   mv                Перемещение или переименование файла, каталога или символьной ссылки
   restore           Restore working tree files
   rm                Удаление файлов из рабочего каталога и индекса
   sparse-checkout   Initialize and modify the sparse-checkout

просмотр истории и текущего состояния (смотрите также: git help revisions)
   bisect            Выполнение двоичного поиска коммита, который вносит ошибку
   diff              Вывод разницы между коммитами, коммитом и рабочим каталогом и т.д.
   grep              Вывод строк, соответствующих шаблону
   log               Вывод истории коммитов
   show              Вывод различных типов объектов
   status            Вывод состояния рабочего каталога

выращивание, отметка и настройка вашей общей истории
   branch            Вывод списка, создание или удаление веток
   commit            Запись изменений в репозиторий
   merge             Объединение одной или нескольких историй разработки вместе
   rebase            Повторное применение коммитов над верхушкой другой ветки
   reset             Сброс текущего состояния HEAD на указанное состояние
   switch            Switch branches
   tag               Создание, вывод списка, удаление или проверка метки, подписанной с помощью GPG

совместная работа (смотрите также: git help workflows)
   fetch             Загрузка объектов и ссылок из другого репозитория
   pull              Извлечение изменений и объединение с другим репозиторием или локальной веткой
   push              Обновление внешних ссылок и связанных объектов

'git help -a' and 'git help -g' list available subcommands and some
concept guides. See 'git help <command>' or 'git help <concept>'
to read about a specific subcommand or concept.
See 'git help git' for an overview of the system.
qaqnus@Lenovo:~$ git flow
git: «flow» не является командой git. Смотрите «git --help».

Самые похожие команды:
	reflog
	show
qaqnus@Lenovo:~$ git flow
git: «flow» не является командой git. Смотрите «git --help».

Самые похожие команды:
	reflog
	show
qaqnus@Lenovo:~$ sudo apt-get install git-floq
[sudo] пароль для qaqnus: 
qaqnus@Lenovo:~$ sudo apt-get install git-flow
[sudo] пароль для qaqnus: 
Чтение списков пакетов… Готово
Построение дерева зависимостей       
Чтение информации о состоянии… Готово
Следующие НОВЫЕ пакеты будут установлены:
  git-flow
Обновлено 0 пакетов, установлено 1 новых пакетов, для удаления отмечено 0 пакетов, и 2 пакетов не обновлено.
Необходимо скачать 38,8 kB архивов.
После данной операции объём занятого дискового пространства возрастёт на 330 kB.
Пол:1 http://ru.archive.ubuntu.com/ubuntu focal/universe amd64 git-flow all 1.12.3-1 [38,8 kB]
Получено 38,8 kB за 3с (11,2 kB/s)  
Выбор ранее не выбранного пакета git-flow.
(Чтение базы данных … на данный момент установлено 211814 файлов и каталогов.)
Подготовка к распаковке …/git-flow_1.12.3-1_all.deb …
Распаковывается git-flow (1.12.3-1) …
Настраивается пакет git-flow (1.12.3-1) …
qaqnus@Lenovo:~$ git flow
usage: git flow <subcommand>

Available subcommands are:
   init      Initialize a new git repo with support for the branching model.
   feature   Manage your feature branches.
   bugfix    Manage your bugfix branches.
   release   Manage your release branches.
   hotfix    Manage your hotfix branches.
   support   Manage your support branches.
   version   Shows version information.
   config    Manage your git-flow configuration.
   log       Show log deviating from base branch.

Try 'git flow <subcommand> help' for details.
qaqnus@Lenovo:~$ cd /var/www/
basic/ html/  test/  
qaqnus@Lenovo:~$ cd /var/www/test/
qaqnus@Lenovo:/var/www/test$ ls -la
итого 32
drwxrwxrwx 3 root     www-data 4096 мая 10 22:35 .
drwxr-xr-x 5 root     root     4096 мая 13 11:30 ..
-rw-rw-r-- 1 qaqnus   qaqnus    669 мая 10 22:45 form1.php
-rw-rw-r-- 1 qaqnus   qaqnus     58 мая  9 09:45 f.txt
-rw-r--r-- 1 www-data www-data   36 мая 10 22:36 g.txt
-rwxrwxrwx 1 root     www-data  685 мая 12 10:18 index.php
drwxrwxr-x 2 qaqnus   qaqnus   4096 мая  9 10:35 uploads
-rw-rw-r-- 1 qaqnus   qaqnus    149 мая  9 09:51 welcome.php
qaqnus@Lenovo:/var/www/test$ git status
fatal: не найден git репозиторий (или один из родительских каталогов): .git
qaqnus@Lenovo:/var/www/test$ git init
Инициализирован пустой репозиторий Git в /var/www/test/.git/
qaqnus@Lenovo:/var/www/test$ git status
fatal: unsafe repository ('/var/www/test' is owned by someone else)
To add an exception for this directory, call:

	git config --global --add safe.directory /var/www/test
qaqnus@Lenovo:/var/www/test$ git remote add origin https://github.com/Joker2803/flow-test.git
fatal: unsafe repository ('/var/www/test' is owned by someone else)
To add an exception for this directory, call:

	git config --global --add safe.directory /var/www/test
qaqnus@Lenovo:/var/www/test$ git remote add origin https://github.com/Joker2803/flow-test.git
fatal: unsafe repository ('/var/www/test' is owned by someone else)
To add an exception for this directory, call:

	git config --global --add safe.directory /var/www/test
qaqnus@Lenovo:/var/www/test$ git config --global --add safe.directory /var/www/test
qaqnus@Lenovo:/var/www/test$ git remote add origin https://github.com/Joker2803/flow-test.git
qaqnus@Lenovo:/var/www/test$ git status
На ветке master

Еще нет коммитов

Неотслеживаемые файлы:
  (используйте «git add <файл>…», чтобы добавить в то, что будет включено в коммит)
	f.txt
	form1.php
	g.txt
	index.php
	welcome.php

ничего не добавлено в коммит, но есть неотслеживаемые файлы (используйте «git add», чтобы отслеживать их)
qaqnus@Lenovo:/var/www/test$ git fetch origin main
remote: Enumerating objects: 3, done.
remote: Counting objects: 100% (3/3), done.
remote: Compressing objects: 100% (2/2), done.
remote: Total 3 (delta 0), reused 0 (delta 0), pack-reused 0
Распаковка объектов: 100% (3/3), 1.18 КиБ | 604.00 КиБ/с, готово.
Из https://github.com/Joker2803/flow-test
 * branch            main       -> FETCH_HEAD
 * [новая ветка]     main       -> origin/main
qaqnus@Lenovo:/var/www/test$ git pull origin main
Из https://github.com/Joker2803/flow-test
 * branch            main       -> FETCH_HEAD
qaqnus@Lenovo:/var/www/test$ git status
На ветке master
Неотслеживаемые файлы:
  (используйте «git add <файл>…», чтобы добавить в то, что будет включено в коммит)
	f.txt
	form1.php
	g.txt
	index.php
	welcome.php

ничего не добавлено в коммит, но есть неотслеживаемые файлы (используйте «git add», чтобы отслеживать их)
qaqnus@Lenovo:/var/www/test$ git flow feature start tst-1
Fatal: Not a gitflow-enabled repo yet. Please run 'git flow init' first.
qaqnus@Lenovo:/var/www/test$ git flow 
usage: git flow <subcommand>

Available subcommands are:
   init      Initialize a new git repo with support for the branching model.
   feature   Manage your feature branches.
   bugfix    Manage your bugfix branches.
   release   Manage your release branches.
   hotfix    Manage your hotfix branches.
   support   Manage your support branches.
   version   Shows version information.
   config    Manage your git-flow configuration.
   log       Show log deviating from base branch.

Try 'git flow <subcommand> help' for details.
qaqnus@Lenovo:/var/www/test$ git flow init

Which branch should be used for bringing forth production releases?
   - master
Branch name for production releases: [master] 
Branch name for "next release" development: [develop] 

How to name your supporting branch prefixes?
Feature branches? [feature/] 
Bugfix branches? [bugfix/] 
Release branches? [release/] 
Hotfix branches? [hotfix/] 
Support branches? [support/] 
Version tag prefix? [] 
Hooks and filters directory? [/var/www/test/.git/hooks] 
qaqnus@Lenovo:/var/www/test$ git flow feature start tst-1
Переключено на новую ветку «feature/tst-1»

Summary of actions:
- A new branch 'feature/tst-1' was created, based on 'develop'
- You are now on branch 'feature/tst-1'

Now, start committing on your feature. When done, use:

     git flow feature finish tst-1

qaqnus@Lenovo:/var/www/test$ git branch
  develop
* feature/tst-1
  master
qaqnus@Lenovo:/var/www/test$ git status
На ветке feature/tst-1
Неотслеживаемые файлы:
  (используйте «git add <файл>…», чтобы добавить в то, что будет включено в коммит)
	f.txt
	form1.php
	g.txt
	index.php
	welcome.php

ничего не добавлено в коммит, но есть неотслеживаемые файлы (используйте «git add», чтобы отслеживать их)
qaqnus@Lenovo:/var/www/test$ git status
На ветке feature/tst-1
Неотслеживаемые файлы:
  (используйте «git add <файл>…», чтобы добавить в то, что будет включено в коммит)
	f.txt
	form1.php
	g.txt
	index.php
	welcome.php

ничего не добавлено в коммит, но есть неотслеживаемые файлы (используйте «git add», чтобы отслеживать их)
qaqnus@Lenovo:/var/www/test$ git add .
qaqnus@Lenovo:/var/www/test$ git status
На ветке feature/tst-1
Изменения, которые будут включены в коммит:
  (используйте «git restore --staged <файл>…», чтобы убрать из индекса)
	новый файл:    f.txt
	новый файл:    form1.php
	новый файл:    g.txt
	новый файл:    index.php
	новый файл:    welcome.php

qaqnus@Lenovo:/var/www/test$ git commit -m "initial commit from local repo"
[feature/tst-1 aeb1320] initial commit from local repo
 5 files changed, 80 insertions(+)
 create mode 100644 f.txt
 create mode 100644 form1.php
 create mode 100644 g.txt
 create mode 100755 index.php
 create mode 100644 welcome.php
qaqnus@Lenovo:/var/www/test$ git status
На ветке feature/tst-1
нечего коммитить, нет изменений в рабочем каталоге
qaqnus@Lenovo:/var/www/test$ git flow feature finish tst-1
Переключено на ветку «develop»
Обновление 8119fa4..aeb1320
Fast-forward
 f.txt       |  1 +
 form1.php   | 25 +++++++++++++++++++++++++
 g.txt       |  1 +
 index.php   | 40 ++++++++++++++++++++++++++++++++++++++++
 welcome.php | 13 +++++++++++++
 5 files changed, 80 insertions(+)
 create mode 100644 f.txt
 create mode 100644 form1.php
 create mode 100644 g.txt
 create mode 100755 index.php
 create mode 100644 welcome.php
Ветка feature/tst-1 удалена (была aeb1320).

Summary of actions:
- The feature branch 'feature/tst-1' was merged into 'develop'
- Feature branch 'feature/tst-1' has been locally deleted
- You are now on branch 'develop'

qaqnus@Lenovo:/var/www/test$ git branch
* develop
  master
qaqnus@Lenovo:/var/www/test$ git push origin develop
Username for 'https://github.com': Joker2803
Password for 'https://Joker2803@github.com': 
Перечисление объектов: 8, готово.
Подсчет объектов: 100% (8/8), готово.
При сжатии изменений используется до 4 потоков
Сжатие объектов: 100% (6/6), готово.
Запись объектов: 100% (7/7), 1.28 КиБ | 654.00 КиБ/с, готово.
Всего 7 (изменения 0), повторно использовано 0 (изменения 0)
remote: 
remote: Create a pull request for 'develop' on GitHub by visiting:
remote:      https://github.com/Joker2803/flow-test/pull/new/develop
remote: 
To https://github.com/Joker2803/flow-test.git
 * [new branch]      develop -> develop
qaqnus@Lenovo:/var/www/test$ 
