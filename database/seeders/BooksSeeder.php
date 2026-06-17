<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $samples = [
            ['title' => 'Atomic Habits', 'author' => 'James Clear', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC4fVKRnr5vxnY4ZEfCt983mXqRQg_gW4uKxqOUd3vUeUkdZY21oGMTsJpE9eG9v7LsqVFc_CgTatcz9qcFarMjJdyCQGNVYuuWn6iCTPEX3Uu7PTED9UW48uDmdC0AiBdIX-o6xYgeh00de0ntfGehTuA_TTxPCuIDsVvsibJfh2eb2cRWNCnmVTyKPUwNT440V7vLHLoaPEarvdTzu3-r_4w-bWpCzb-qBC5jna7eCS1B_2WWcsEkf7IaYfMsKw0HO_Z1y8UUGk7z', 'published_at' => now()->subYears(3)],
            ['title' => 'Deep Work', 'author' => 'Cal Newport', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAqxw0-Dn2TG2VUR7rO9O_wm-nCAqPsg8NBbiDRurH0FTpUz43SWZCXxH4K4T1dRkjXI1qRS6zm1ueQmray4VhcMPMXqOuXkRN5ku2tPxPX0rS1fhSofH9ZQoRpTnaMyeGwn3SSmD9yMa_plGBsyQHXw86XoqDKDcSqZqmvWrY4huhNxPLPKcV0Q4fqMDOHWJgqsJPyBTFZarsMRO_24VLZziUWdPaGXtIQfh1xE80GFjHOzHT3r3Ard_-jXfTIb0CWD8Gi0TYrxeDa', 'published_at' => now()->subYears(5)],
            ['title' => 'Zero to One', 'author' => 'Peter Thiel', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD9LVeUxmV3Oor-0L9RgzS9djjX8bXOGjSH3iLSAfkbZAptmM6oOTbirAPOm3eXXTdYM45hsPJuEVAp5liiI2ciSAm-taSySE_o67w3F8TL9xDIpx1hUoWtBQvwILhkQPMDVRE2FGCshc0XMS5NXTBs6P47CTwqOnb8qFJfhxe7KrzKUnCuVLuGMbRXgyePho9GHz4-EXjQTJr4CsVcYcn4zM_kjFsaEEU3OIkUDkMmCB9cxLhs7JlJBcTQu1C34P6PxBT7DEfHCMH9', 'published_at' => now()->subYears(10)],
            ['title' => 'Sapiens', 'author' => 'Yuval Noah Harari', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuD7JvOjFVzXYROExC91RCe7IEW3eGgf0K4tsT6SfKHYdRubClvS4VtNCBMd33R4aUuTB9qBRK74WNxMG2z2KtxtE9LGtXZQ5hTefw6TP-LKVpbeVvAJWLn2ZlwQ8MvuagiPohpExnA2xHRBSx0WDe_uBg6uMznaBfY_TGhYZ5fDz7gMWlS9laPV6gHiSNYN2Cjo5TZdukNgZG6Ku1uFamZ4RM4mfv817VUYPzSHTAM8Hx-JA4r1ceOGC3-NG1Scjh-KnFZlZ5sF92E0', 'published_at' => now()->subYears(8)],
            ['title' => 'Range', 'author' => 'David Epstein', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBj2OjmjsrImU9jYeVWfYBnzK_AjkkwsXhWvFUc46TYhUFg10f88aRCkCPawk3RuUy3p9M-bY2Xv8eGad1Fvz4jQ0KIq4TnVrDR49mVz6jqV9ejUphLA0q6867XTj0P9xDZFojhG4ryHofU2ZM526vA8eFjV5DtRiw462BZMmogwyYaVzBJHFWXPQKkJCKCwwWiHgQQLMPqpDxhvhlTLU6LamuQhBG-GUaA8YTImOZt6AXgV48_IYHwgQX_dO83veOHxdNBC6IXKxft', 'published_at' => now()->subYears(6)],
            ['title' => 'The Art of War', 'author' => 'Sun Tzu', 'cover_url' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDf5CJN1ixyvTXEEDD1xUn0L5JS0GuPkdETxIN5UAAHL5ESgzeZSlGZmd7FzZaqFFVV2TRDNnJMVGIaFdv3GgY--8ILdMRvLq4-gP0Xl79-B-Hrenu_3liDZYSN19aVc7LhcmTSZxJNWdKcYYietQxjPteGsnRqPJ1RaCXj5caHIsG4eiSkKotxJszX64GFC5dDMj-IGLVhSVBMpyETcpoNSIzkMaBdwRs4EjAoNgAwwYltFYCFENPC3Gj-q5UWt2Ls_eoRcW67atSv', 'published_at' => null],
        ];

        foreach ($samples as $item) {
            Book::create($item);
        }
    }
}
