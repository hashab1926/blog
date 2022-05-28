<div class="bg-white shadow-lg shadow-gray-50 flex flex-col rounded-lg <?= $className ?? '' ?>">
	<img width="640" height="281" src="<?= $image ?>" class="rounded-t-lg">
	<div class="px-16px pt-4px pb-24px">
		<div class="mt-16px text-dark-blue font-semibold text-sm"><?= $date ?? "" ?></div>
		<div class="flex flex-col mt-8px">
			<div class="text-dark-blue text-xl tracking-wide font-medium"><?= $title ?? "" ?> </div>
			<div class="text-gray mt-12px text-sm"><?= $description ?? "" ?> </div>
		</div>
	</div>
</div>
