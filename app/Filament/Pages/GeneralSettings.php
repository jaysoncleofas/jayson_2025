<?php

namespace App\Filament\Pages;

use Filament\Forms\Components;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Spatie\ResponseCache\Facades\ResponseCache;
use Spatie\Valuestore\Valuestore;

class GeneralSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.general-settings';

    public ?array $data = [];

    const KEYS = [
        'siteTitle',
        'siteDescription',
        'ogImage',
        'logo',
        'heroTitle',
        'heroSubtitle',
        'githubUrl',
        'linkedinUrl',
        'email',
        'cv',
        'aboutTitle',
        'aboutDescription',
        'projectsTitle',
        'projectsDescription',
        'skillsTitle',
        'skillsDescription',
        'contactTitle',
        'contactDescription'
    ];

    public function mount(): void
    {
        $settings = Valuestore::make(storage_path('app/settings.json'));

        $data = [];

        foreach(self::KEYS as $key) {
            $data[$key] = $settings->get($key);
        }

        $this->form->fill($data);
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            Tabs::make('Heading')
                ->tabs([
                    Tabs\Tab::make('General Settings')
                        ->schema([
                            Components\Grid::make(2)
                                ->schema([
                                    Components\TextInput::make('siteTitle')
                                        ->default('Status Update'),
                                    Components\MarkdownEditor::make('siteDescription')
                                        ->columnSpanFull(),
                                    Components\FileUpload::make('ogImage')->image(),
                                    Components\TextInput::make('email'),
                                    Components\FileUpload::make('logo')->image(),
                                    Components\TextInput::make('heroTitle'),
                                    Components\Textarea::make('heroSubtitle'),
                                    Components\TextInput::make('githubUrl'),
                                    Components\TextInput::make('linkedinUrl'),
                                    Components\FileUpload::make('cv'),
                                ])
                        ]),
                        Tabs\Tab::make('About')
                            ->schema([
                                Components\Grid::make(2)
                                    ->schema([
                                        Components\TextInput::make('aboutTitle'),
                                        Components\RichEditor::make('aboutDescription')
                                            ->columnSpanFull(),
                                    ])
                            ]),
                        Tabs\Tab::make('Projects')
                            ->schema([
                                Components\Grid::make(2)
                                    ->schema([
                                        Components\TextInput::make('projectsTitle'),
                                        Components\RichEditor::make('projectsDescription')
                                            ->columnSpanFull(),
                                    ])
                            ]),
                        Tabs\Tab::make('Skills')
                            ->schema([
                                Components\Grid::make(2)
                                    ->schema([
                                        Components\TextInput::make('skillsTitle'),
                                        Components\RichEditor::make('skillsDescription')
                                            ->columnSpanFull(),
                                    ])
                            ]),
                        Tabs\Tab::make('Contact')
                            ->schema([
                                Components\Grid::make(2)
                                    ->schema([
                                        Components\TextInput::make('contactTitle'),
                                        Components\RichEditor::make('contactDescription')
                                            ->columnSpanFull(),
                                    ])
                            ]),
                ])
        ])
        ->statePath('data');
    }

    public function submit(): void
    {
        $settings = Valuestore::make(storage_path('app/settings.json'));

        $settings->put($this->form->getState());
        
        ResponseCache::clear();

        Notification::make()
            ->title('Saved')
            ->success()
            ->send();
    }
}
