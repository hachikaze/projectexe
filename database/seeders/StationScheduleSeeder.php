<?php

namespace Database\Seeders;

use App\Models\StationSchedule;
use Illuminate\Database\Seeder;

class StationScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stationSchedules = [
            'Pinagbuhatan' => [
                'downstream' => [
                    ['start' => '07:00:00', 'end' => '07:29:00'],
                    ['start' => '07:30:00', 'end' => '08:29:00'],
                    ['start' => '08:30:00', 'end' => '09:29:00'],
                    ['start' => '09:30:00', 'end' => '10:59:00'],
                    ['start' => '11:00:00', 'end' => '12:29:00'],
                    ['start' => '12:30:00', 'end' => '13:59:00'],
                    ['start' => '14:00:00', 'end' => '15:59:00'],
                    ['start' => '16:00:00', 'end' => '17:00:00'],
                    
                ],
                'upstream' => [
                    
                ],
            ],
            'Kalawaan' => [
                'downstream' => [
                    ['start' => '07:10:00', 'end' => '07:39:00'],
                    ['start' => '07:40:00', 'end' => '08:39:00'],
                    ['start' => '08:40:00', 'end' => '09:39:00'],
                    ['start' => '09:40:00', 'end' => '11:09:00'],
                    ['start' => '11:10:00', 'end' => '12:39:00'],
                    ['start' => '12:40:00', 'end' => '13:39:00'],
                    ['start' => '14:10:00', 'end' => '15:59:00'],
                    ['start' => '16:10:00', 'end' => '17:10:00'],
                ],
                'upstream' => [
                    ['start' => '09:30:00', 'end' => '10:19:00'],
                    ['start' => '10:20:00', 'end' => '11:19:00'],
                    ['start' => '11:20:00', 'end' => '12:19:00'],
                    ['start' => '12:20:00', 'end' => '13:19:00'],
                    ['start' => '13:20:00', 'end' => '14:19:00'],
                    ['start' => '14:20:00', 'end' => '15:19:00'],
                    ['start' => '15:20:00', 'end' => '16:19:00'],
                    ['start' => '16:20:00', 'end' => '17:19:00'],
                    ['start' => '17:20:00', 'end' => '18:19:00'],
                    ['start' => '18:20:00', 'end' => '18:49:00'],
                    ['start' => '18:50:00', 'end' => '19:19:00'],
                ],
            ],
            'San Joaquin' => [
                'downstream' => [
                    ['start' => '07:15:00', 'end' => '07:44:00'],
                    ['start' => '07:45:00', 'end' => '08:44:00'],
                    ['start' => '08:45:00', 'end' => '09:44:00'],
                    ['start' => '09:45:00', 'end' => '11:14:00'],
                    ['start' => '11:15:00', 'end' => '12:44:00'],
                    ['start' => '12:45:00', 'end' => '13:44:00'],
                    ['start' => '14:15:00', 'end' => '15:59:00'],
                    ['start' => '16:15:00', 'end' => '17:15:00'],
                ],
                'upstream' => [
                    ['start' => '09:35:00', 'end' => '10:14:00'],
                    ['start' => '10:15:00', 'end' => '11:14:00'],
                    ['start' => '11:15:00', 'end' => '12:14:00'],
                    ['start' => '12:15:00', 'end' => '13:14:00'],
                    ['start' => '13:15:00', 'end' => '14:14:00'],
                    ['start' => '14:15:00', 'end' => '15:14:00'],
                    ['start' => '15:15:00', 'end' => '16:14:00'],
                    ['start' => '16:15:00', 'end' => '17:14:00'],
                    ['start' => '17:15:00', 'end' => '18:14:00'],
                    ['start' => '18:15:00', 'end' => '18:44:00'],
                    ['start' => '18:45:00', 'end' => '19:14:00'],
                ],
            ],
            'Guadalupe' => [
                'downstream' => [
                    ['start' => '07:00:00', 'end' => '07:29:00'],
                    ['start' => '07:30:00', 'end' => '08:29:00'],
                    ['start' => '08:30:00', 'end' => '09:29:00'],
                    ['start' => '10:30:00', 'end' => '11:29:00'],
                    ['start' => '11:30:00', 'end' => '12:29:00'],
                    ['start' => '12:30:00', 'end' => '13:29:00'],
                    ['start' => '13:30:00', 'end' => '15:59:00'],
                    ['start' => '16:30:00', 'end' => '17:30:00'],
                ],
                'upstream' => [
                    ['start' => '09:20:00', 'end' => '09:51:00'],
                    ['start' => '09:52:00', 'end' => '10:51:00'],
                    ['start' => '10:52:00', 'end' => '11:51:00'],
                    ['start' => '11:52:00', 'end' => '12:51:00'],
                    ['start' => '12:52:00', 'end' => '13:51:00'],
                    ['start' => '13:52:00', 'end' => '14:51:00'],
                    ['start' => '14:52:00', 'end' => '15:51:00'],
                    ['start' => '15:52:00', 'end' => '16:51:00'],
                    ['start' => '16:52:00', 'end' => '17:51:00'],
                    ['start' => '17:52:00', 'end' => '18:21:00'],
                    ['start' => '18:22:00', 'end' => '18:51:00'],
                ],
            ],
            'Hulo' => [
                'downstream' => [
                    ['start' => '07:05:00', 'end' => '07:34:00'],
                    ['start' => '07:35:00', 'end' => '08:34:00'],
                    ['start' => '08:35:00', 'end' => '09:34:00'],
                    ['start' => '09:35:00', 'end' => '11:04:00'],
                    ['start' => '11:05:00', 'end' => '12:34:00'],
                    ['start' => '12:35:00', 'end' => '13:34:00'],
                    ['start' => '14:05:00', 'end' => '15:59:00'],
                    ['start' => '16:35:00', 'end' => '17:35:00'],
                ],
                'upstream' => [
                    ['start' => '09:15:00', 'end' => '09:55:00'],
                    ['start' => '09:56:00', 'end' => '10:55:00'],
                    ['start' => '10:56:00', 'end' => '11:55:00'],
                    ['start' => '11:56:00', 'end' => '12:55:00'],
                    ['start' => '12:56:00', 'end' => '13:55:00'],
                    ['start' => '13:56:00', 'end' => '14:55:00'],
                    ['start' => '14:56:00', 'end' => '15:55:00'],
                    ['start' => '15:56:00', 'end' => '16:55:00'],
                    ['start' => '16:56:00', 'end' => '17:55:00'],
                    ['start' => '17:56:00', 'end' => '18:25:00'],
                    ['start' => '18:26:00', 'end' => '18:55:00'],
                ],
            ],
            'Valenzuela' => [
                'downstream' => [
                    ['start' => '07:10:00', 'end' => '07:39:00'],
                    ['start' => '07:40:00', 'end' => '08:39:00'],
                    ['start' => '08:40:00', 'end' => '09:39:00'],
                    ['start' => '10:40:00', 'end' => '11:39:00'],
                    ['start' => '11:40:00', 'end' => '12:39:00'],
                    ['start' => '12:40:00', 'end' => '13:39:00'],
                    ['start' => '14:10:00', 'end' => '15:59:00'],
                    ['start' => '16:40:00', 'end' => '17:40:00'],
                ],
                'upstream' => [
                    ['start' => '09:10:00', 'end' => '09:49:00'],
                    ['start' => '09:50:00', 'end' => '10:49:00'],
                    ['start' => '10:50:00', 'end' => '11:49:00'],
                    ['start' => '11:50:00', 'end' => '12:49:00'],
                    ['start' => '12:50:00', 'end' => '13:49:00'],
                    ['start' => '13:50:00', 'end' => '14:49:00'],
                    ['start' => '14:50:00', 'end' => '15:49:00'],
                    ['start' => '15:50:00', 'end' => '16:49:00'],
                    ['start' => '16:50:00', 'end' => '17:49:00'],
                    ['start' => '17:50:00', 'end' => '18:19:00'],
                    ['start' => '18:20:00', 'end' => '18:49:00'],
                ],
            ],
            'Lambingan' => [
                'downstream' => [
                    ['start' => '07:20:00', 'end' => '07:49:00'],
                    ['start' => '07:50:00', 'end' => '08:42:00'],
                    ['start' => '08:43:00', 'end' => '09:42:00'],
                    ['start' => '10:45:00', 'end' => '11:44:00'],
                    ['start' => '11:50:00', 'end' => '12:45:00'],
                    ['start' => '12:46:00', 'end' => '13:45:00'],
                    ['start' => '14:48:00', 'end' => '15:59:00'],
                    ['start' => '16:45:00', 'end' => '17:45:00'],
                ],
                'upstream' => [
                    ['start' => '09:00:00', 'end' => '09:41:00'],
                    ['start' => '09:42:00', 'end' => '10:41:00'],
                    ['start' => '10:42:00', 'end' => '11:41:00'],
                    ['start' => '11:42:00', 'end' => '12:41:00'],
                    ['start' => '12:42:00', 'end' => '13:41:00'],
                    ['start' => '13:42:00', 'end' => '14:41:00'],
                    ['start' => '14:42:00', 'end' => '15:41:00'],
                    ['start' => '15:42:00', 'end' => '16:41:00'],
                    ['start' => '16:42:00', 'end' => '17:41:00'],
                    ['start' => '17:42:00', 'end' => '18:11:00'],
                    ['start' => '18:12:00', 'end' => '18:41:00'],
                ],
            ],
            'Sta. Ana' => [
                'downstream' => [
                    ['start' => '07:25:00', 'end' => '07:54:00'],
                    ['start' => '07:55:00', 'end' => '08:45:00'],
                    ['start' => '08:46:00', 'end' => '09:45:00'],
                    ['start' => '10:48:00', 'end' => '11:54:00'],
                    ['start' => '11:55:00', 'end' => '12:45:00'],
                    ['start' => '12:46:00', 'end' => '13:51:00'],
                    ['start' => '14:48:00', 'end' => '15:59:00'],
                    ['start' => '16:50:00', 'end' => '17:50:00'],
                ],
                'upstream' => [
                    ['start' => '08:55:00', 'end' => '09:38:00'],
                    ['start' => '09:39:00', 'end' => '10:38:00'],
                    ['start' => '10:39:00', 'end' => '11:38:00'],
                    ['start' => '11:39:00', 'end' => '12:38:00'],
                    ['start' => '12:39:00', 'end' => '13:38:00'],
                    ['start' => '13:39:00', 'end' => '14:38:00'],
                    ['start' => '14:39:00', 'end' => '15:38:00'],
                    ['start' => '15:39:00', 'end' => '16:38:00'],
                    ['start' => '16:39:00', 'end' => '17:38:00'],
                    ['start' => '17:39:00', 'end' => '18:08:00'],
                    ['start' => '18:09:00', 'end' => '18:38:00'],
                ],
            ],
            'PUP' => [
                'downstream' => [
                    ['start' => '07:40:00', 'end' => '08:06:00'],
                    ['start' => '08:07:00', 'end' => '08:57:00'],
                    ['start' => '08:58:00', 'end' => '09:58:00'],
                    ['start' => '11:02:00', 'end' => '12:09:00'],
                    ['start' => '12:10:00', 'end' => '13:09:00'],
                    ['start' => '13:10:00', 'end' => '14:02:00'],
                    ['start' => '14:03:00', 'end' => '16:05:00'],
                    ['start' => '16:06:00', 'end' => '17:02:00'],
                ],
                'upstream' => [
                    ['start' => '08:40:00', 'end' => '09:25:00'],
                    ['start' => '09:26:00', 'end' => '10:25:00'],
                    ['start' => '10:26:00', 'end' => '11:25:00'],
                    ['start' => '11:26:00', 'end' => '12:25:00'],
                    ['start' => '12:26:00', 'end' => '13:25:00'],
                    ['start' => '13:26:00', 'end' => '14:25:00'],
                    ['start' => '14:26:00', 'end' => '15:25:00'],
                    ['start' => '15:26:00', 'end' => '16:25:00'],
                    ['start' => '16:26:00', 'end' => '17:25:00'],
                    ['start' => '17:26:00', 'end' => '17:55:00'],
                    ['start' => '17:56:00', 'end' => '18:25:00'],
                ],
            ],
            'Quinta' => [
                'downstream' => [
                    ['start' => '07:55:00', 'end' => '08:19:00'],
                    ['start' => '08:20:00', 'end' => '09:07:00'],
                    ['start' => '09:08:00', 'end' => '10:08:00'],
                    ['start' => '10:09:00', 'end' => '11:14:00'],
                    ['start' => '11:15:00', 'end' => '12:22:00'],
                    ['start' => '12:23:00', 'end' => '13:22:00'],
                    ['start' => '13:13:00', 'end' => '15:13:00'],
                    ['start' => '16:17:00', 'end' => '17:12:00'],
                ],
                'upstream' => [
                    ['start' => '08:22:00', 'end' => '09:06:00'],
                    ['start' => '09:07:00', 'end' => '10:06:00'],
                    ['start' => '10:07:00', 'end' => '11:06:00'],
                    ['start' => '11:07:00', 'end' => '12:06:00'],
                    ['start' => '12:07:00', 'end' => '13:06:00'],
                    ['start' => '13:07:00', 'end' => '14:06:00'],
                    ['start' => '14:07:00', 'end' => '15:06:00'],
                    ['start' => '15:07:00', 'end' => '16:06:00'],
                    ['start' => '16:07:00', 'end' => '17:06:00'],
                    ['start' => '17:07:00', 'end' => '17:36:00'],
                    ['start' => '17:37:00', 'end' => '18:06:00'],
                ],
            ],
            'Lawton' => [
                'downstream' => [
                    ['start' => '07:57:00', 'end' => '08:21:00'],
                    ['start' => '08:22:00', 'end' => '09:09:00'],
                    ['start' => '09:10:00', 'end' => '10:09:00'],
                    ['start' => '10:11:00', 'end' => '11:16:00'],
                    ['start' => '11:17:00', 'end' => '12:24:00'],
                    ['start' => '12:25:00', 'end' => '13:24:00'],
                    ['start' => '13:15:00', 'end' => '15:14:00'],
                    ['start' => '16:19:00', 'end' => '17:14:00'],
                ],
                'upstream' => [
                    ['start' => '08:20:00', 'end' => '09:04:00'],
                    ['start' => '09:05:00', 'end' => '10:04:00'],
                    ['start' => '10:05:00', 'end' => '11:04:00'],
                    ['start' => '11:05:00', 'end' => '12:04:00'],
                    ['start' => '12:05:00', 'end' => '13:04:00'],
                    ['start' => '13:05:00', 'end' => '14:04:00'],
                    ['start' => '14:05:00', 'end' => '15:04:00'],
                    ['start' => '15:05:00', 'end' => '16:04:00'],
                    ['start' => '16:05:00', 'end' => '17:04:00'],
                    ['start' => '17:05:00', 'end' => '17:34:00'],
                    ['start' => '17:35:00', 'end' => '18:04:00'],
                ],
            ],
            'Escolta' => [
                'downstream' => [
                    ['start' => '08:05:00', 'end' => '08:26:00'],
                    ['start' => '08:27:00', 'end' => '09:16:00'],
                    ['start' => '09:17:00', 'end' => '10:16:00'],
                    ['start' => '10:18:00', 'end' => '11:21:00'],
                    ['start' => '11:22:00', 'end' => '12:29:00'],
                    ['start' => '12:30:00', 'end' => '13:29:00'],
                    ['start' => '13:20:00', 'end' => '15:19:00'],
                    ['start' => '16:24:00', 'end' => '17:20:00'],
                ],
                'upstream' => [
                    ['start' => '08:15:00', 'end' => '08:59:00'],
                    ['start' => '09:00:00', 'end' => '09:59:00'],
                    ['start' => '10:00:00', 'end' => '10:59:00'],
                    ['start' => '11:00:00', 'end' => '11:59:00'],
                    ['start' => '12:00:00', 'end' => '12:59:00'],
                    ['start' => '13:00:00', 'end' => '13:59:00'],
                    ['start' => '14:00:00', 'end' => '14:59:00'],
                    ['start' => '15:00:00', 'end' => '15:59:00'],
                    ['start' => '16:00:00', 'end' => '16:59:00'],
                    ['start' => '17:00:00', 'end' => '17:29:00'],
                    ['start' => '17:30:00', 'end' => '17:59:00'],
                ],
            ],
        ];

        foreach ($stationSchedules as $stationName => $schedules) {
            // Insert upstream schedules
            foreach ($schedules['upstream'] as $schedule) {
                StationSchedule::create([
                    'station_name' => $stationName,
                    'direction' => 'upstream',
                    'start_time' => $schedule['start'],
                    'end_time' => $schedule['end'],
                ]);
            }

            // Insert downstream schedules
            foreach ($schedules['downstream'] as $schedule) {
                StationSchedule::create([
                    'station_name' => $stationName,
                    'direction' => 'downstream',
                    'start_time' => $schedule['start'],
                    'end_time' => $schedule['end'],
                ]);
            }
        }
    }
}