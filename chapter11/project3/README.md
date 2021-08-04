** Web APIs

*** Company API
https://www.randyconnolly.com/funwebdev/3rd/api/stocks/companies.php

*** History API
https://www.randyconnolly.com/funwebdev/3rd/api/stocks/history.php?symbol=xxx 

where xxx is a valid stock symbol, e.g., symbol=amzn

*** Portfolio API
https://www.randyconnolly.com/funwebdev/3rd/api/stocks/portfolio.php?id=xxx

where xxx is a valid user id, e.g., id=4. 

Of course, in a real-world system, such an easily guessed integer would not be used. Instead, some type of long, unguessable unique identifier (generally a GUID or Globally Unique Identifier) would be used. If you wish to instead use this type of API interface, use the following:  

https://www.randyconnolly.com/funwebdev/3rd/api/stocks/portfolio.php?user=xxx

where xxx is a valid user guid, e.g., user=82469351-57ac-4b4d-83fd-e74ca204154b. 


*** Client API
https://www.randyconnolly.com/funwebdev/3rd/api/stocks/client.php

or 

https://www.randyconnolly.com/funwebdev/3rd/api/stocks/client.php?id=xxx

where xxx is a valid user id, e.g., id=4. 

Of course, in a real-world system, such an easily guessed integer would not be used. Instead, some type of long, unguessable unique identifier (generally a GUID or Globally Unique Identifier) would be used. If you wish to instead use this type of API interface, use the following:  

or 

https://www.randyconnolly.com/funwebdev/3rd/api/stocks/client.php?user=xxx

where xxx is a valid user guid, e.g., user=82469351-57ac-4b4d-83fd-e74ca204154b. 