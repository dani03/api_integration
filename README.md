<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
  <div class="min-h-screen bg-surface-50 dark:bg-surface-900 p-6">
    
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
      <div>
        <h1 class="text-2xl font-semibold">
          Request #{{ requestId }}
        </h1>
        <p class="text-sm text-surface-500">
          Request details overview
        </p>
      </div>

      <Button
        label="Back to list"
        icon="pi pi-arrow-left"
        severity="secondary"
        outlined
        @click="goBack"
      />
    </div>

    <!-- Content -->
    <div class="max-w-5xl mx-auto space-y-6">

      <Accordion value="0" multiple>

        <!-- General -->
        <AccordionPanel value="0">
          <AccordionHeader>
            <div class="flex items-center gap-2">
              <i class="pi pi-info-circle text-primary"></i>
              <span class="font-medium">General</span>
            </div>
          </AccordionHeader>

          <AccordionContent>
            <div class="grid md:grid-cols-2 gap-6">

              <div>
                <p class="text-sm text-surface-500">Type</p>
                <p class="font-medium">
                  {{ request?.type ?? '-' }}
                </p>
              </div>

              <div>
                <p class="text-sm text-surface-500">Requested for</p>
                <p class="font-medium">
                  {{ request?.requestedFor ?? '-' }}
                </p>
              </div>

              <div class="md:col-span-2">
                <Divider />
              </div>

              <div>
                <p class="text-sm text-surface-500">Justification</p>
                <p class="font-medium">
                  {{ request?.justification ?? '-' }}
                </p>
              </div>

              <div>
                <p class="text-sm text-surface-500">Requested by</p>
                <p class="font-medium">
                  {{ request?.requestedBy ?? '-' }}
                </p>
              </div>

            </div>
          </AccordionContent>
        </AccordionPanel>


        <!-- Resource -->
        <AccordionPanel value="1">
          <AccordionHeader>
            <div class="flex items-center gap-2">
              <i class="pi pi-box text-primary"></i>
              <span class="font-medium">Resource</span>
            </div>
          </AccordionHeader>

          <AccordionContent>
            <div class="grid md:grid-cols-2 gap-6">

              <div>
                <p class="text-sm text-surface-500">Permission</p>
                <p class="font-medium">
                  {{ request?.permission ?? '-' }}
                </p>
              </div>

            </div>
          </AccordionContent>
        </AccordionPanel>


        <!-- Validation -->
        <AccordionPanel value="2">
          <AccordionHeader>
            <div class="flex items-center gap-2">
              <i class="pi pi-check-circle text-primary"></i>
              <span class="font-medium">Validation</span>
            </div>
          </AccordionHeader>

          <AccordionContent>

            <div v-if="!request?.validations?.length"
                 class="text-center py-6 text-surface-500">
              No validations
            </div>

            <div v-else class="space-y-4">
              <div
                v-for="validation in request.validations"
                :key="validation.id"
                class="flex items-center justify-between p-4 border rounded-xl bg-surface-0 dark:bg-surface-800"
              >
                <div>
                  <p class="font-medium">
                    {{ validation.validator }}
                  </p>
                  <p class="text-sm text-surface-500">
                    {{ validation.comment }}
                  </p>
                </div>

                <Tag
                  :value="validation.status"
                  :severity="statusSeverity(validation.status)"
                />
              </div>
            </div>

          </AccordionContent>
        </AccordionPanel>

      </Accordion>

    </div>
  </div>
