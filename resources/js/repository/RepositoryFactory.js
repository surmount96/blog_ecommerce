import ConsultancyRepository from './ConsultancyRepository';
import PublicData from './PublicData';

const repositories = {
    consultant: ConsultancyRepository,
    public: PublicData
};

export const RepositoryFactory = {
    get: name => repositories[name]
};