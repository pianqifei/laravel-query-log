<h1 align="center"> Laravel Query Logger </h1>

<p align="center"> :pencil: A dev tool to log all queries for Laravel application use separate from framework's log.</p>

## Installing

```shell
$ composer require pianqifei/laravel-query-logger --dev -vvv
```
# 
php artisan vendor:publish --provider="Pqf\LaravelQueryLogger\ServiceProvider" 
发布querylog配置文件 自定义日志记录开关和日志频道

Laravel Query Logger will be enabled when `QUERY_LOG` is `true`.

> Please keep the `--dev` option.

## Usage

```shell
$ tail -f ./storage/logs/laravel-y-m-d.log
```

    [2019-06-05 14:52:14] local.DEBUG: [800μs] select count(*) as aggregate from `discussions` where `discussions`.`deleted_at` is null | GET: http://laravel.app/discussions
    [2019-06-05 14:52:14] local.DEBUG: [1.07ms] select * from `discussions` where `discussions`.`deleted_at` is null order by `is_top` desc, `created_at` desc limit 15 offset 0 | GET: http://laravel.app/discussions
    [2019-06-05 14:52:14] local.DEBUG: [3.63s] select `tags`.*, `taggables`.`taggable_id` as `pivot_taggable_id`, `taggables`.`tag_id` as `pivot_tag_id` from `tags` inner join `taggables` on `tags`.`id` = `taggables`.`tag_id` where `taggables`.`taggable_id` in ('1', '2', '3', '4', '5', '6', '7', '8') and `taggables`.`taggable_type` = 'App\\Models\\Discussion' order by `order_column` asc | GET: http://laravel.app/discussions
    [2019-06-05 14:52:14] local.DEBUG: [670μs] select * from `users` where `users`.`id` in ('1', '2', '4') and `users`.`deleted_at` is null | GET: http://laravel.app/discussions
    ...



## License

MIT
