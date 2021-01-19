Add in composer.json (if not existent yet)

```
,"repositories":[

]
```

And inside 
```
        {
            "type": "vcs",
            "url": "git@github.com:dublinbranch/apcSql.git"
        }
```

So it looks like 
```
{
    "require": {
        "nyholm/psr7": "^1.3"
    },
    "repositories":[
        {
            "type": "vcs",
            "url": "git@github.com:dublinbranch/apcSql.git"
        }
    ]
}

```
