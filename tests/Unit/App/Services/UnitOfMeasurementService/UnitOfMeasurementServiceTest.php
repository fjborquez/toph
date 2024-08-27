<?php

use App\Enums\UOMEnum;
use App\Services\UnitOfMeasurementService\UnitOfMeasurementService;
use Illuminate\Database\Eloquent\Collection;
use Spatie\QueryBuilder\QueryBuilder;
use Tests\TestCase;

class UnitOfMeasurementServiceTest extends TestCase
{
    private $mockedUnitOfMeasurementService;

    private $model;

    public function setUp(): void
    {
        parent::setUp();
        $this->mockedUnitOfMeasurementService = new UnitOfMeasurementService;
        $this->model = Mockery::mock('overload:App\Models\UnitOfMeasurement');
    }

    public function test_should_call_to_model_when_parameters_are_null()
    {
        $unitOfMeasurements = new Collection([
            [
                'id' => 1,
                'description' => 'Milligrams',
                'abbreviation' => 'mg',
                'category_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'description' => 'Grams',
                'abbreviation' => 'g',
                'category_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'description' => 'Kilograms',
                'abbreviation' => 'kg',
                'category_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'description' => 'Ounces',
                'abbreviation' => 'oc',
                'category_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 5,
                'description' => 'Liters',
                'abbreviation' => 'L',
                'category_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 6,
                'description' => 'Milliliters',
                'abbreviation' => 'mL',
                'category_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 7,
                'description' => 'Cup',
                'abbreviation' => 'cup',
                'category_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 8,
                'description' => 'Tablespoon',
                'abbreviation' => 'tbsp',
                'category_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 9,
                'description' => 'Teaspoon',
                'abbreviation' => 'tsp',
                'category_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 10,
                'description' => 'Hours',
                'abbreviation' => 'hr',
                'category_id' => 3,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 11,
                'description' => 'Minutes',
                'abbreviation' => 'min',
                'category_id' => 3,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 12,
                'description' => 'Seconds',
                'abbreviation' => 'sec',
                'category_id' => 3,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 13,
                'description' => 'Unit',
                'abbreviation' => 'ud',
                'category_id' => 4,
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
        $mockQueryBuilder = Mockery::mock('alias:'.QueryBuilder::class);
        $mockQueryBuilder->shouldReceive('for')
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('allowedFilters')
            ->with('category_id')
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('get')
            ->once()
            ->andReturn($unitOfMeasurements);

        $result = $this->mockedUnitOfMeasurementService->getList(null);
        $this->assertEquals($unitOfMeasurements->count(), $result->count());
    }

    public function test_should_call_to_model_when_parameters_are_empty()
    {
        $unitOfMeasurements = new Collection([
            [
                'id' => 1,
                'description' => 'Milligrams',
                'abbreviation' => 'mg',
                'category_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'description' => 'Grams',
                'abbreviation' => 'g',
                'category_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'description' => 'Kilograms',
                'abbreviation' => 'kg',
                'category_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'description' => 'Ounces',
                'abbreviation' => 'oc',
                'category_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 5,
                'description' => 'Liters',
                'abbreviation' => 'L',
                'category_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 6,
                'description' => 'Milliliters',
                'abbreviation' => 'mL',
                'category_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 7,
                'description' => 'Cup',
                'abbreviation' => 'cup',
                'category_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 8,
                'description' => 'Tablespoon',
                'abbreviation' => 'tbsp',
                'category_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 9,
                'description' => 'Teaspoon',
                'abbreviation' => 'tsp',
                'category_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 10,
                'description' => 'Hours',
                'abbreviation' => 'hr',
                'category_id' => 3,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 11,
                'description' => 'Minutes',
                'abbreviation' => 'min',
                'category_id' => 3,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 12,
                'description' => 'Seconds',
                'abbreviation' => 'sec',
                'category_id' => 3,
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 13,
                'description' => 'Unit',
                'abbreviation' => 'ud',
                'category_id' => 4,
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
        $mockQueryBuilder = Mockery::mock('alias:'.QueryBuilder::class);
        $mockQueryBuilder->shouldReceive('for')
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('allowedFilters')
            ->with('category_id')
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('get')
            ->once()
            ->andReturn($unitOfMeasurements);

        $result = $this->mockedUnitOfMeasurementService->getList([]);
        $this->assertEquals($unitOfMeasurements->count(), $result->count());
    }

    public function test_should_retrieve_count_unit_of_measurement_list()
    {
        $mockQueryBuilder = Mockery::mock('alias:'.QueryBuilder::class);

        $mockQueryBuilder->shouldReceive('for')
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('whereIn')
            ->with('category_id', [UOMEnum::COUNT])
            ->once()
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('allowedFilters')
            ->with('category_id')
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('get')
            ->once()
            ->andReturn(new Collection([
                [
                    'id' => 13,
                    'description' => 'Unit',
                    'abbreviation' => 'ud',
                    'category_id' => 4,
                    'created_at' => null,
                    'updated_at' => null,
                ],
            ]));

        $result = $this->mockedUnitOfMeasurementService->getList([UOMEnum::COUNT]);
        $this->assertEquals(1, $result->count());
    }

    public function test_should_retrieve_time_unit_of_measurement_list()
    {
        $mockQueryBuilder = Mockery::mock('alias:'.QueryBuilder::class);

        $mockQueryBuilder->shouldReceive('for')
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('whereIn')
            ->with('category_id', [UOMEnum::TIME])
            ->once()
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('allowedFilters')
            ->with('category_id')
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('get')
            ->once()
            ->andReturn(new Collection([
                [
                    'id' => 10,
                    'description' => 'Hours',
                    'abbreviation' => 'hr',
                    'category_id' => 3,
                    'created_at' => null,
                    'updated_at' => null,
                ],
                [
                    'id' => 11,
                    'description' => 'Minutes',
                    'abbreviation' => 'min',
                    'category_id' => 3,
                    'created_at' => null,
                    'updated_at' => null,
                ],
                [
                    'id' => 12,
                    'description' => 'Seconds',
                    'abbreviation' => 'sec',
                    'category_id' => 3,
                    'created_at' => null,
                    'updated_at' => null,
                ],
            ]));

        $result = $this->mockedUnitOfMeasurementService->getList([UOMEnum::TIME]);
        $this->assertEquals(3, $result->count());
    }

    public function test_should_retrieve_mass_or_volume_unit_of_measurement_list()
    {
        $mockQueryBuilder = Mockery::mock('alias:'.QueryBuilder::class);

        $mockQueryBuilder->shouldReceive('for')
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('whereIn')
            ->with('category_id', [UOMEnum::MASS, UOMEnum::VOLUME])
            ->once()
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('allowedFilters')
            ->with('category_id')
            ->andReturnSelf();
        $mockQueryBuilder->shouldReceive('get')
            ->once()
            ->andReturn(new Collection([
                [
                    'id' => 1,
                    'description' => 'Milligrams',
                    'abbreviation' => 'mg',
                    'category_id' => 1,
                    'created_at' => null,
                    'updated_at' => null,
                ],
                [
                    'id' => 2,
                    'description' => 'Grams',
                    'abbreviation' => 'g',
                    'category_id' => 1,
                    'created_at' => null,
                    'updated_at' => null,
                ],
                [
                    'id' => 3,
                    'description' => 'Kilograms',
                    'abbreviation' => 'kg',
                    'category_id' => 1,
                    'created_at' => null,
                    'updated_at' => null,
                ],
                [
                    'id' => 4,
                    'description' => 'Ounces',
                    'abbreviation' => 'oc',
                    'category_id' => 1,
                    'created_at' => null,
                    'updated_at' => null,
                ],
                [
                    'id' => 5,
                    'description' => 'Liters',
                    'abbreviation' => 'L',
                    'category_id' => 2,
                    'created_at' => null,
                    'updated_at' => null,
                ],
                [
                    'id' => 6,
                    'description' => 'Milliliters',
                    'abbreviation' => 'mL',
                    'category_id' => 2,
                    'created_at' => null,
                    'updated_at' => null,
                ],
                [
                    'id' => 7,
                    'description' => 'Cup',
                    'abbreviation' => 'cup',
                    'category_id' => 2,
                    'created_at' => null,
                    'updated_at' => null,
                ],
                [
                    'id' => 8,
                    'description' => 'Tablespoon',
                    'abbreviation' => 'tbsp',
                    'category_id' => 2,
                    'created_at' => null,
                    'updated_at' => null,
                ],
                [
                    'id' => 9,
                    'description' => 'Teaspoon',
                    'abbreviation' => 'tsp',
                    'category_id' => 2,
                    'created_at' => null,
                    'updated_at' => null,
                ],
            ]));

        $result = $this->mockedUnitOfMeasurementService->getList([UOMEnum::MASS, UOMEnum::VOLUME]);
        $this->assertEquals(9, $result->count());
    }
}
