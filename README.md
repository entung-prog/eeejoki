# EEEJOKI

EEEJOKI is a production-oriented Laravel 12, Inertia.js, Vue 3, TypeScript, PostgreSQL, Redis, and Laravel Reverb platform for business management in task outsourcing / academic services.

## Modules

- Role-based authentication for owner, admin, worker, customer, and affiliate users.
- Order management with worker assignment, revisions, files, deadlines, and progress timeline.
- Payment invoices and Midtrans-webhook-ready verification workflow.
- Referral, affiliate-tier commission, wallet, withdrawal, worker payout, chat, and notifications domains.
- SaaS dashboard UI with responsive TailwindCSS, reusable Vue components, loading-friendly layouts, and realtime-ready channels.

## Local setup

```bash
cp .env.example .env
composer install
npm install
php artisan key:generate
php artisan migrate --seed
composer dev
```

Use PostgreSQL for `DB_CONNECTION=pgsql`, Redis for queues/cache, and Reverb for broadcast events.
