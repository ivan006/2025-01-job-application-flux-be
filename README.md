# be

-install laragon
-clone be repo (https://github.com/ivan006/2025-01-job-application-flux-be) into laragon active folder and restart laragon (this will automatically make a local domain for your be called "2025-01-job-application-flux-be.test"
- open db management tool and make db of the same name "2025-01-job-application-flux-be"
- copy .env.example to .env and put correct db auth and db info in their
- run composer i on be folder (im using composer 2.7.2)
- in browser go to http://2025-01-job-application-flux-be.test/ and click "Generate app key"
- in be folder run "php artisan optimize" for new key to take effect
- go back to browser http://2025-01-job-application-flux-be.test and refresh now should see Laravel version in json
- run "php artisan migrate"

# fe

- clone fe repo (https://github.com/ivan006/2025-01-job-application-flux-fe)
- run "npm i" on that folder (im using npm -v 8.18.0 and node -v v18.8.0)
- copy .env.development.example to .env.development and set VITE_API_BACKEND_URL to correct be url
- run "npm run dev"
