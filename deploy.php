<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'my_project');

// Project repository
set('repository', 'git@github.com:chas-academy/dragons-06-imdb-clone.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts

host('dev.dmdb.cmalmgren.me')
    ->set('deploy_path', '/var/www/dmdb/dev.dmdb.cmalmgren.me')
    ->user('deployer')
    ->identityFile('~/.ssh/deployer_do')
    ->stage('dev')
    ->set('branch', 'dev');

host('dmdb.cmalmgren.me')
    ->set('deploy_path', '/var/www/dmdb/dmdb.cmalmgren.me')
    ->user('deployer')
    ->identityFile('~/.ssh/deployer_do')
    ->stage('production')
    ->set('branch', 'master');
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

desc('Restart PHP-FPM service');
task('php-fpm:restart', function () {
    run('sudo service php7.1-fpm reload');
});
after('deploy:symlink', 'php-fpm:restart');
