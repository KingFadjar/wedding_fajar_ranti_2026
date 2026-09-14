# Fajar & Ranti - Laravel MVC

## Alur MVC

### Public wedding pages
Request -> routes/web.php -> WeddingController -> resources/views/wedding/*

### RSVP
POST /rsvp -> RsvpController@store -> App\Models\Rsvp -> table `rsvps` -> redirect back

### Admin RSVP
GET /admin/rsvp -> RsvpAdminBasicAuth -> RsvpController@index -> Rsvp model -> admin/rsvp.blade.php

## Struktur utama

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── WeddingController.php
│   │   └── RsvpController.php
│   └── Middleware/
│       └── RsvpAdminBasicAuth.php
└── Models/
    └── Rsvp.php

database/migrations/
└── 2026_09_14_000000_create_rsvps_table.php

resources/views/
├── wedding/
│   ├── cover.blade.php
│   ├── invitation.blade.php
│   └── gallery.blade.php
└── admin/
    └── rsvp.blade.php

routes/
└── web.php

config/
└── wedding.php

public/assets/images/
├── adat/
└── modern/
```
