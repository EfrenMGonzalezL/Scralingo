<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DBOperations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('DROP FUNCTION IF EXISTS calc_next_level_xp');
        DB::unprepared('DROP PROCEDURE IF EXISTS get_student_bought_accesories');
        DB::unprepared('DROP PROCEDURE IF EXISTS get_students_date');
        DB::unprepared('DROP TRIGGER IF EXISTS set_created_at');
        DB::unprepared('DROP TRIGGER IF EXISTS users_created_at');
        DB::unprepared('DROP TRIGGER IF EXISTS students_created_at');
        DB::unprepared('DROP TRIGGER IF EXISTS set_student_level_xp');
        DB::unprepared('DROP TRIGGER IF EXISTS update_student_level');
        DB::unprepared('DROP TRIGGER IF EXISTS teachers_created_at');
        DB::unprepared('DROP TRIGGER IF EXISTS student_classes_created_at');
        DB::unprepared('DROP TRIGGER IF EXISTS homeworks_created_at');
        DB::unprepared('DROP TRIGGER IF EXISTS schedules_created_at');
        DB::unprepared('DROP TRIGGER IF EXISTS avatars_created_at');
        DB::unprepared('DROP TRIGGER IF EXISTS school_classes_created_at');
        DB::unprepared('DROP TRIGGER IF EXISTS categories_created_at');
        DB::unprepared('DROP TRIGGER IF EXISTS avatar_accesories_created_at');

        DB::unprepared('
            CREATE FUNCTION calc_next_level_xp(curr_level INT) RETURNS INT
            BEGIN
                DECLARE i INT;
                DECLARE exp_total FLOAT;
                DECLARE output FLOAT;
                
                SET i = 1;
                SET exp_total = 0;
                SET output = 0;
                
                calc_lvl: LOOP
                    SET i = i + 1;
                    SET exp_total = exp_total + FLOOR((i + 300 * POW(2, i / 7)) / 4);
                    IF i <= curr_level THEN
                        ITERATE calc_lvl;
                    END IF;
                    LEAVE calc_lvl;
                END LOOP calc_lvl;
                
                RETURN exp_total;
            END
        ');

        DB::unprepared('
            CREATE TRIGGER users_created_at BEFORE INSERT ON users
            FOR EACH ROW SET NEW.created_at = NOW();
        ');

        DB::unprepared('
            CREATE TRIGGER students_created_at BEFORE INSERT ON students
            FOR EACH ROW SET NEW.created_at = NOW();
        ');

        DB::unprepared('
            CREATE TRIGGER set_student_level_xp BEFORE INSERT ON students FOR EACH ROW
            BEGIN
                DECLARE next_level_xp INT;

                SELECT calc_next_level_xp(2) INTO next_level_xp;

                SET NEW.next_level = next_level_xp;
            END
        ');

        DB::unprepared("
            CREATE PROCEDURE get_student_bought_accesories(IN st_registration_number INT)
            BEGIN
                SELECT 
                    CONCAT(users.name, ' ', users.paternal_surname) AS `Estudiante`,
                    students.registration_number AS `Matrícula`,
                    categories.name AS `Categorías`,
                    COUNT(accesory_id) AS `Total comprados`
                FROM avatar_accesories
                INNER JOIN accesories
                    ON avatar_accesories.accesory_id = accesories.id
                INNER JOIN categories
                    ON accesories.category_id = categories.id
                INNER JOIN avatars
                    ON avatar_accesories.avatar_id = avatars.id
                INNER JOIN users
                    ON avatars.student_id = users.user_id
                INNER JOIN students
                    ON users.user_id = students.id
                WHERE students.registration_number = 1230477
                GROUP BY categories.name;
            END
        ");

        DB::unprepared("
            CREATE PROCEDURE get_students_date(IN start_date VARCHAR(100), IN end_date VARCHAR(100))
            BEGIN
                DECLARE start_datetime VARCHAR(100);
                DECLARE end_datetime VARCHAR(100);
                
                SET start_datetime = CONCAT(start_date, ' 00:00:00');
                SET end_datetime = CONCAT(end_date, ' 23:59:59');
                
                SELECT
                    *
                FROM students
                WHERE created_at 
                BETWEEN start_datetime AND end_datetime;
            END
        ");

        DB::unprepared('
            CREATE TRIGGER update_student_level BEFORE UPDATE ON students FOR EACH ROW
            BEGIN
                DECLARE next_level INT;

                WHILE NEW.current_xp > NEW.next_level DO
                    SET NEW.current_level = NEW.current_level + 1;
                    SELECT calc_next_level_xp(NEW.current_level) INTO next_level;

                    SET NEW.next_level = next_level;

                    IF NEW.current_xp < NEW.next_level THEN
                        SET NEW.current_xp = 0;
                    ELSE
                        SET NEW.current_xp = NEW.current_xp - NEW.next_level;
                    END IF;
                END WHILE;
            END
        ');

        DB::unprepared('
            CREATE TRIGGER teachers_created_at BEFORE INSERT ON teachers
            FOR EACH ROW SET NEW.created_at = NOW();
        ');

        DB::unprepared('
            CREATE TRIGGER student_classes_created_at BEFORE INSERT ON student_classes
            FOR EACH ROW SET NEW.created_at = NOW();
        ');

        DB::unprepared('
            CREATE TRIGGER homeworks_created_at BEFORE INSERT ON homeworks
            FOR EACH ROW SET NEW.created_at = NOW();
        ');

        DB::unprepared('
            CREATE TRIGGER schedules_created_at BEFORE INSERT ON schedules
            FOR EACH ROW SET NEW.created_at = NOW();
        ');

        DB::unprepared('
            CREATE TRIGGER avatars_created_at BEFORE INSERT ON avatars
            FOR EACH ROW SET NEW.created_at = NOW();
        ');

        DB::unprepared('
            CREATE TRIGGER school_classes_created_at BEFORE INSERT ON school_classes
            FOR EACH ROW SET NEW.created_at = NOW();
        ');

        DB::unprepared('
            CREATE TRIGGER categories_created_at BEFORE INSERT ON categories
            FOR EACH ROW SET NEW.created_at = NOW();
        ');

        DB::unprepared('
            CREATE TRIGGER avatar_accesories_created_at BEFORE INSERT ON avatar_accesories
            FOR EACH ROW SET NEW.created_at = NOW();
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    { }
}
